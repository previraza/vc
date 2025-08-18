<?php require_once "../../../settings/params/connect";
    $COTES = array('credit' => array(), 'courses' => array(), 'students' => array(),);
    $sizsOfGrille = isset($_POST['G_size'])&&$_POST['G_size']!='full'?($_POST['G_size']=='gprs'?" AND (part = 1 OR part = 3 OR part = 5)":($_POST['G_size']=='gdus'?" AND (part = 2 OR part = 4 OR part = 6)":null)):null;
    $rqt = mysqli_query($db, "SELECT courses.*, ue.ue AS ue_credit, ue.code AS ue_code, ue.name AS ue_name FROM courses LEFT JOIN ue ON ue.id = courses.ue WHERE courses.active = 1 AND courses.delete = 0 AND class = $_GET[class] $sizsOfGrille ORDER BY part, id");
    $class_course = mysqli_num_rows($rqt); $all_courses=""; $cou_part=$ue=$_trs_ec=[];
    while ($course = mysqli_fetch_object($rqt)){
        $rqt_cote = mysqli_query($db, 
            "SELECT `student`, `course`, 
                ROUND(CASE WHEN `RMC` != 0 AND ".(isset($_POST['periode'])&&($_POST['periode']=='gpsn')?0:1).
                    " THEN `RMC` ELSE ((`TP1`+`TP2`+`TP3`)/12+(`INT1`+`INT2`)/8+`EXAM`/2) END,2) AS TOTAL, ".(  
                    isset($_POST['periode'])&&($_POST['periode']=='gpsn' || $_POST['periode']=='gpsr')?0:'CASE WHEN `RRC` != 0 THEN `RRC` ELSE `RATR` END '
                ). " AS `RATR`, `JURY` FROM cotes WHERE active = 1 AND course = ".$course->id
        ) or die(mysqli_error($db));
        while($row_cote = mysqli_fetch_array($rqt_cote)) $COTES['students'][$row_cote['course']][$row_cote['student']] = $row_cote;
        isset($cou_part[$course->part])?$cou_part[$course->part]++:$cou_part[$course->part]=1;
        if(!isset($_ue[$course->part][$course->ue])) $_ue[$course->part][$course->ue] = (object)[
            'part'  => $course->part,
            'name'  => $course->ue_name,
            'code'  => $course->ue_code,
            'credit'  => 0,
            'ec'    => [],
            'td'    => '',
        ];  $_ue[$course->part][$course->ue]->ec[]=(object)[ 'id' => $course->id, 'credit'=>$course->credit,'name'=>$course->name];
            $_ue[$course->part][$course->ue]->credit+=$course->credit;
    } $class_res_tot = 60*20;
    $total_success = $total_echec = $moyenne_classe = 0;
    $trs_cou_part = $trs_ue = $trs_ec_code = $trs_ec_credit = $trs_ue_code = $trs_ue_credit = ""; 
    $_trs_ue = $_trs_ec_code = $_trs_ec_credit = $_trs_ue_code = $_trs_ue_credit = $echec=$success=$tr_code=$all_ue_credit=[];
    foreach ($cou_part as $k => $l) {
        foreach ($_ue[$k] as $ue) {
            $all_ue_credit[$k] = isset($all_ue_credit[$k])?$all_ue_credit[$k]+$ue->credit:$ue->credit;
            if(count($ue->ec)>1) foreach ($ue->ec as $i => $ec_) $_trs_ec[$ec_->id] = (object)[
                'std' => $COTES['students'][$ec_->id] ?? [],
                'credit' => $ec_->credit,
                'part' => $ue->part,
            ]; else $_trs_ec[$ue->ec[0]->id] = (object)[
                'std' => $COTES['students'][$ue->ec[0]->id] ?? [],
                'credit' => $ue->ec[0]->credit,
                'part' => $ue->part,
            ];
        } 
        $echec[$k]=$success[$k]=0;
    } $periode = ($_POST['periode']??NULL) == 'gpsr' ? "finish_in = 'gpsr' OR finish_in = 'gdsn' OR finish_in = 'gdsr'" : 
                (($_POST['periode']??NULL) == 'gdsn' ? "finish_in = 'gdsn' OR finish_in = 'gdsr'" :
                (($_POST['periode']??NULL) == 'gdsr' ? "finish_in = 'gdsr'" : 1)) ;
        $rqt_std = mysqli_query($db, "SELECT students.*, palmares.completed, palmares.resultat,
                    (SELECT DISTINCT cotes.student FROM cotes WHERE cotes.RMC AND cotes.student = students.id) AS gpsr,
                    (SELECT DISTINCT cotes.student FROM cotes WHERE cotes.RRC AND cotes.student = students.id) AS pdsr
                FROM students LEFT JOIN palmares ON palmares.student = students.id WHERE (finish_in IS NULL OR $periode) AND active = 1 AND students.delete = 0 AND students.class = ".$_GET['class']." ORDER BY students.firstname, students.lastname".(isset($std_trancon)&&$std_trancon!=0?' LIMIT 100 OFFSET '.(--$std_trancon):null));
    $all_count_std = mysqli_num_rows($rqt_std);
    while($std = mysqli_fetch_object($rqt_std)) {
        if (isset($_POST['periode'])&&($_POST['periode']=='RSR' || $_POST['periode']=='ASR') && $std->completed == 1 && $std->resultat > 50) continue;
        $cote_credit=$res_success=$res_echec=$credits=0; $cote = array();
        foreach($_trs_ec AS $idx => $course) {
            $jury=$cote=$dataIsset=0;
            if(isset($course->std[$std->id])){
                $dataIsset = 1;
                $pre_cote = $course->std[$std->id]['TOTAL']+0;
                $cote = ($course->std[$std->id]['RATR']??0>$pre_cote ? $course->std[$std->id]['RATR'] : $pre_cote) ;
                $jury = $course->std[$std->id]['JURY'];
            } if($cote < 10 && $jury < 10) $echec[$course->part]+=$course->credit; else {$success[$course->part]+=$course->credit; $credits+=$course->credit;}
            $cote_credit+=($final = ($jury&&$jury!=$cote?$jury:$cote))*$course->credit;
        } foreach ($cou_part as $k => $l) {
            $res_success+= $success[$k]; $res_echec+= $echec[$k];
            $success[$k]=$echec[$k]=0;
        }$cote_credit ? number_format($res=$cote_credit/60,2):$res=0;

    ($res>=10&&$res_success>=45)?$total_success++:$total_echec++;
} json([
    'c' => $_GET['class']??0, 'r' => $total_success, 'e' => $total_echec
]); ?>
