<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_POST['course']) && isset($_POST['student']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM students JOIN courses ON courses.class = students.class WHERE students.id = $student AND courses.id = $course ORDER BY firstname"))){
            $data_encrypted = md5(time()).sha1(time());
            $code = 
            mysqli_query($db,
                ($cote ? 'UPDATE' : 'INSERT INTO')." `cotes` 
                    SET 
                        `student` = '$student', 
                        `course`  = '$course', 
                        `recours` = 0, 
                        `recours_date` = NULL,
                        ".(isset($TP1)   ? '`TP1`  = '.$TP1.','  : NULL)."
                        ".(isset($TP1)   ? '`TP2`  = '.$TP1.','  : NULL)."
                        ".(isset($TP1)   ? '`TP3`  = '.$TP1.','  : NULL)."
                        ".(isset($INT1)  ? '`INT1` = '.$INT1.',' : NULL)."
                        ".(isset($INT1)  ? '`INT2` = '.$INT1.',' : NULL)."
                        ".(isset($EXAM)  ? '`EXAM` = '.$EXAM.',' : NULL)."
                        ".(isset($RATR)  ? '`RATR` = '.$RATR.',' : NULL)."
                        `data_encrypt` = '$data_encrypted'
                ".($cote ? 'WHERE id = '.$cote : NULL)) 
            or die(json_encode(array(
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : ".mysqli_error($db)
            )));
                
            die(json_encode(array(
                "status" => "succes",
                "code" => "4200",
                "content" => $data_encrypted
            )));
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "Student don't have this course"
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