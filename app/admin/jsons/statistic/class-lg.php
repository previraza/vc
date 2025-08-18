<?php require_once "../../../settings/params/connect";
    $COTES = array('credit' => array(),'courses' => array(),'students' => array());
        $total_success = $total_echec = $moyenne_classe = 0;
        $sizsOfGrille = isset($_POST['G_size'])&&$_POST['G_size']!='full'?($_POST['G_size']=='gprs'?" AND (part = 1 OR part = 3 OR part = 5)":($_POST['G_size']=='gdus'?" AND (part = 2 OR part = 4 OR part = 6)":null)):null;
        $rqt = mysqli_query($db, "SELECT * FROM courses WHERE active = 1 AND `delete` = 0 AND class = $_GET[class] $sizsOfGrille ORDER BY part, id");
        $class_course = mysqli_num_rows(mysqli_query($db, "SELECT * FROM courses WHERE active = 1 AND `name` != 'Stage' AND `name` != 'Mémoire' AND `delete` = 0 AND class = $_GET[class] $sizsOfGrille ORDER BY part, id"));
    
        $all_course = ''; while ($course = mysqli_fetch_object($rqt)){ 
        $rqt_cote = mysqli_query($db, ($course->name === 'Stage' || $course->name === 'Mémoire' ?
            "SELECT `student`, `course`, ROUND((`TP1`+`TP2`+`TP3`)/12+(`INT1`+`INT2`)/8+`EXAM`/2,2) AS TOTAL, ".(isset($_POST['periode'])&&($_POST['periode']=='AS' || $_POST['periode']=='ASR')?'0 AS `RATR`, ':'`RATR`, ')." `JURY` FROM cotes WHERE active = 1 AND course = " :
            "SELECT `student`, `course`, ROUND(CASE WHEN `RMC` != 0 AND ".(isset($_POST['periode'])&&($_POST['periode']=='gpsn')?0:1).
                " THEN `RMC` ELSE ((`TP1`+`TP2`+`TP3`)/12+(`INT1`+`INT2`)/8+`EXAM`/2) END,2) AS TOTAL, ".(  
                isset($_POST['periode'])&&($_POST['periode']=='gpsn' || $_POST['periode']=='gpsr')?0:'CASE WHEN `RRC` != 0 THEN `RRC` ELSE `RATR` END '
            ). " AS `RATR`, `JURY` FROM cotes WHERE active = 1 AND course = ").$course->id
        ) or die(mysqli_error($db));
        while($row_cote = mysqli_fetch_array($rqt_cote)) {
            $COTES['students'][$row_cote['student']][$row_cote['course']] = $row_cote;
        } if($course->name === 'Stage') $stage = $course->id;
        elseif($course->name === 'Mémoire') $memoire = $course->id;
        else $COTES['credit'][$course->id] = $course->credit;
    }
    $class_res_tot = ($credits = array_sum($COTES['credit'])) * 20;
    $periode = ($_POST['periode']??NULL) == 'gpsr' ? "finish_in = 'gpsr' OR finish_in = 'gdsn' OR finish_in = 'gdsr'" : 
                    (($_POST['periode']??NULL) == 'gdsn' ? "finish_in = 'gdsn' OR finish_in = 'gdsr'" :
                    (($_POST['periode']??NULL) == 'gdsr' ? "finish_in = 'gdsr'" : 1)) ;
            $rqt_std = mysqli_query($db, "SELECT students.*, palmares.completed, palmares.resultat, 
                                    (SELECT DISTINCT cotes.student FROM cotes WHERE cotes.RMC AND cotes.student = students.id) AS RPS,
                                    (SELECT DISTINCT cotes.student FROM cotes WHERE cotes.RRC AND cotes.student = students.id) AS RDS
                                FROM students ".(isset($_POST['periode'])&&($_POST['periode']=='RSR' || $_POST['periode']=='ASR')?NULL:'LEFT')." JOIN palmares ON palmares.student = students.id WHERE (finish_in IS NULL OR $periode) AND students.active = 1 AND students.delete = 0 AND students.class = $_GET[class] ORDER BY firstname, lastname".(isset($std_trancon)&&$std_trancon!=0?' LIMIT 100 OFFSET '.(--$std_trancon):null));
        $count = 0;
        $all_count_std = mysqli_num_rows($rqt_std);
        while($row_std = mysqli_fetch_array($rqt_std)) {
            $std = (object) $row_std;
            if (isset($_POST['periode'])&&($_POST['periode']=='RSR' || $_POST['periode']=='ASR') && $std->completed == 1 && $std->resultat > 50) continue;
            $success = $np = $credits = $cote_credit = 0 ; $cote = array();
            $echecs = ['l'=>0,'g'=>0];
            foreach($COTES['credit'] AS $course => $credit) {
                $jury=$cote=$codeIsset=$stage_codeIsset=$memoire_codeIsset=0;
                if(isset($COTES['students'][$std->id][$course])){
                    $codeIsset = 1;
                    $pre_cote = $COTES['students'][$std->id][$course]['TOTAL']+0;
                    $cote = $COTES['students'][$std->id][$course]['RATR']??0 > 10 ? $COTES['students'][$std->id][$course]['RATR'] : $pre_cote ;
                    $jury = $COTES['students'][$std->id][$course]['JURY']??0;
                } else $np++; if($cote < 10 && $jury < 10) $echecs[($cote>=8||$jury>=8)?'l':'g']++ ; else {$success++; $credits+=$credit;}
                $cote_credit += ($final = ($jury&&$jury!=$cote?$jury:$cote))*$credit;
            } 
            if(isset($stage, $COTES['students'][$std->id][$stage])){
                $stage_codeIsset=1;
                $stage_cote = (($stage_pre_cote = $COTES['students'][$std->id][$stage]['TOTAL']+0) < 10 && $COTES['students'][$std->id][$stage]['RATR']) ? $COTES['students'][$std->id][$stage]['RATR'] : $stage_pre_cote ;
                $stage_jury = $stage_jury = $COTES['students'][$std->id][$stage]['JURY']; $stage_final = ($stage_jury&&$stage_jury!=$stage_cote?$stage_jury:$stage_cote);
            } else $stage_cote = $stage_jury = $stage_final = $stage_jury = 0;

            if (isset($memoire, $COTES['students'][$std->id][$memoire])) {
                $memoire_codeIsset=1;
                $memoire_cote = (($memoire_pre_cote = $COTES['students'][$std->id][$memoire]['TOTAL']+0) < 10 && $COTES['students'][$std->id][$memoire]['RATR']) ? $COTES['students'][$std->id][$memoire]['RATR'] : $memoire_pre_cote ;
                $memoire_jury = $memoire_jury = $COTES['students'][$std->id][$memoire]['JURY']; $memoire_final = ($memoire_jury&&$memoire_jury!=$memoire_cote?$memoire_jury:$memoire_cote);
            } else $memoire_cote = $memoire_jury = $memoire_final = $memoire_jury = 0;
            $res = number_format(($cote_credit*100)/$class_res_tot, 1);
    ($res>=50)?$total_success++:$total_echec++; $moyenne_classe+=$res/$all_count_std;
} json([
    'c' => $_GET['class']??0, 'r' => $total_success, 'e' => $total_echec
]); ?>