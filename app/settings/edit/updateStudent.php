<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($user_id)){
            if(mysqli_num_rows($rqt_std = mysqli_query($db, "SELECT * FROM students_ WHERE students_.id = $user_id AND students_.delete = 0 AND students_.active = 1 ORDER BY firstname"))){
                $dte = md5(time()).sha1(time());
                $class = mysqli_fetch_array($rqt_std)['class'];
                if(isset($preparatoire) && $preparatoire == 'EmmaWAB'){
                    $COTES_FINALE = 50;
                    $passed = 1; $finished = 0;
                    $class = 0;
                } else {
                    $rqtCotes = mysqli_query($db,
                            "SELECT courses.name, level.result_passed AS lev_passed, level.terminal AS lev_terminal, courses.credit, cotes.*, classes.id AS class
                                    FROM courses 
                                        JOIN classes ON classes.id = courses.class
                                        JOIN level ON classes.level = level.id
                                        JOIN students_ ON students_.id = $user_id
                                        LEFT JOIN cotes ON (cotes.course = courses.id AND cotes.student = students_.id AND cotes.active = 1)
                                WHERE courses.active = 1 AND classes.active = 1 AND students_.class = classes.id"
                    ); $CREDIT_VALIDE = $TOTAL_COTES = $TOTAL_CREDIT = 0; $NBR_COURS = mysqli_num_rows($rqtCotes); $COURSES = [];
                    while ($row = mysqli_fetch_array($rqtCotes)) {
                            $COURSES[] = $row; extract($row);
                            $TOTAL_COTES += (($COTE = $JURY?$JURY:((($RES = ((($TP1+$TP2+$TP3+$INT1+$INT2)/5) + $EXAM)/2) > 10 || !$RATR) ? $RES : $RATR)) * $credit) ;
                            $CREDIT_VALIDE += ($COTE < 10) ? 0 : $credit;
                            $TOTAL_CREDIT += $credit;
                    } ; $COTES_FINALE = $TOTAL_CREDIT ? ($TOTAL_COTES * 5) / $TOTAL_CREDIT : 0 ;
                    $passed = (isset($lev_passed) && $COTES_FINALE >= $lev_passed) ? 1 : 0 ;
                    $finished = (isset($lev_terminal) && $passed && $lev_terminal) ? 1 : 0 ;
                }
                $res_exist_delib = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM deliberation WHERE `student` = '$user_id' AND `class` = '$class' AND `session` = $ANNE_ACAD_"));
                
                $updated = " `deliberation` SET `admin` = '$user->id', `student` = '$user_id', `class` = '$class', `result` = '$COTES_FINALE', `ended` = '$finished', `session` = $ANNE_ACAD_, `valide` = '$dte', `datatime` = CURRENT_TIMESTAMP ";
                $sql_rqt = ($res_exist_delib ? "UPDATE" : "INSERT INTO").$updated.($res_exist_delib ? "WHERE `deliberation`.`id` = ".$res_exist_delib[0] : NULL);

                mysqli_query($db, $sql_rqt) or die(json_encode(array(
                        "status" => "error",
                        "code" => "5017",
                        "content" => "Error SQL : ".mysqli_error($db)
                    )));
                mysqli_query($db, "UPDATE `students_` SET `passed` = '$passed', `finished` = '$finished' WHERE `students_`.`id` = $user_id;") or die(json_encode(array(
                        "status" => "error",
                        "code" => "5017",
                        "content" => "Error SQL : ".mysqli_error($db)
                    )));
                die(json_encode(array(
                    "status" => "succes",
                    "code" => "4200",
                    "content" => $dte
                )));
            } else {
                die(json_encode(array(
                    "status" => "error",
                    "code" => "5022",
                    "content" => "L'étudiant séléctionner n'éxiste pas !"
                ))); 
            }
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5021",
                "content" => "Une erreur est survenu lors de votre requette !"
            ))); 
        }
    } else {
        die(json_encode(array(
            "status" => "error",
            "code" => "5020",
            "content" => "Paramètre non valide"
        ))); 
    }
?>