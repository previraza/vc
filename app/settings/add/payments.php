<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($class, $sum, $number, $student, $devise, $type)){
            $fn = $db_pdo->prepare('SELECT student FROM payments WHERE payments.delete = 0 AND number = ?');
            $fn->execute([$number]); $un = $fn->fetch(PDO::FETCH_OBJ);
            if (!$un) { 
                $dte = md5(time()).sha1(time());
                if($bank == 'M') $number = substr(sha1($student.time()),30);
                $class=$class=='REGISTER'?0:$class;
                mysqli_query($db, isset($_GET["stark"])?
                    "INSERT INTO `payments` (
                        `user_id`, 
                        `student_name`, 
                        `bank`, 
                        `type`, `sum`, `devise`, `number`,
                        `data_encrypt`
                    ) VALUES (
                        $user->id, 
                        '$student', 
                        '$bank', 
                        '$type', $sum, '$devise', '$number', 
                        '$dte'
                    )":"INSERT INTO `payments` (
                        `user_id`, 
                        `student`, 
                        `bank`, 
                        `class`, 
                        `type`, `sum`, `devise`, `number`,
                        `data_encrypt`
                    ) VALUES (
                        $user->id, 
                        $student, 
                        '$bank', 
                        $class, 
                        '$type', $sum, '$devise', '$number', 
                        '$dte'
                    )"
                ) or die(json_encode(array(
                    "status" => "error",
                    "code" => "5017",
                    "content" => "Error SQL : ".mysqli_error($db)
                )));
                die(json_encode(array(
                    "status" => "success",
                    "code" => "4200",
                    "content" => "Enregistrer avec succès"
                )));
            } else {
                if ($un->student == $student) die(json_encode(array(
                    "status" => "info",
                    "code" => "4200",
                    "content" => "Bordereau déjà enregistrer avec succès !"
                ))); 
                die(json_encode(array(
                    "status" => "warning",
                    "code" => "5022",
                    "content" => "Cet N° Bordereau est déjà enregistrer dans la base de données"
                ))); 
            }
        } else {
            die(json_encode(array(
                "status" => "warning",
                "code" => "5022",
                "content" => "Remplisez tout les formulaire"
            ))); 
        }
    } else {
        die(json_encode(array(
            "status" => "error",
            "code" => "5020",
            "content" => "Paramètre non valide"
        ))); 
    }