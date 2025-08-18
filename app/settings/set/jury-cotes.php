<?php session_start();
    $acadYear = $_POST['MINE_ACAD_YEAR']??'';
    if($acadYear) $MINE_dbn="snem_$acadYear"; 
    require_once "../params/connect";

    if(isset($_POST['modify']) && isset($_POST['course']) && isset($_POST['student']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM students JOIN courses ON courses.class = students.class WHERE students.id = $student AND courses.id = $course ORDER BY firstname"))){
            $data_encrypted = md5(time()).sha1(time());
            $code = mysqli_query($db,
                ($isset ? 'UPDATE' : 'INSERT INTO')." `cotes` 
                    SET 
                        `student` = '$student', 
                        `course`  = '$course', 
                        `recours` = 0, 
                        `recours_date` = NULL,
                        `JURY`    = $JURY,
                        `data_encrypt` = '$data_encrypted'
                ".($isset ? "WHERE `student` = '$student' AND `course`  = '$course'" : NULL)) 
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