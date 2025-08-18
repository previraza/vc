<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($name, $type, $author, $subject, $level, $house, $date, $serial, $mode, $resume)){
            if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM libraries WHERE name = '$name' AND author = '$author' AND  date = '$date' AND `delete` = 0"))){
                $dte = md5(time()).sha1(time());
                $content = (isset($content) && $content) ? "'".$content."'" : "NULL" ;
                $file = '/library/default_file.pdf';
                mysqli_query($db,
                                "INSERT INTO `libraries` (
                                    `id`,       `user_id`,      `name`, 
                                    `type`,     `author`,       `subject`,      `level`, 
                                    `house`,    `date`,         `serial`, 
                                    `mode`,     `resume`,       `content`, 
                                    `file`,     `data_encrypt`, `saved_date`
                                ) VALUES (
                                    NULL, $user->id, '$name', 
                                    '$type',    '$author',  '$subject',         '$level', 
                                    '$house',    '$date',    '$serial',
                                    '$mode',    '$resume',  $content, 
                                    '$file', '$dte', current_timestamp())
                                ") or die(json_encode(array(
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
                    "content" => "Cet ouvrage est déjà enregistrer dans la base de donnée"
                ))); 
            }
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5021",
                "content" => "Veuillez remplir tout le formulaire"
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