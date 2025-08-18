<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($this_id, $name, $type, $author, $subject, $level, $house, $date, $serial, $mode, $resume)){
            if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM libraries WHERE id = $this_id AND user_id = $user->id"))){
                $dte = md5(time()).sha1(time());
                $content = (isset($content) && $content) ? "'".$content."'" : "NULL" ;
                $file = '/library/default_file.pdf';
                mysqli_query($db,
                            "UPDATE `libraries` 
                                SET `name` = '$name', 
                                    `type` = '$type', `author` = '$author', 
                                    `subject` = '$serial', `level` = '$level', 
                                    `house` = '$house', `date` = '$date', 
                                    `serial` = '$serial', `mode` = '$mode', 
                                    `resume` = '$resume', `content` = '$content', 
                                    `file` = '$file',  `data_encrypt` = '$dte' 
                                WHERE `libraries`.`id` = $this_id
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
                    "content" => "l'ouvrage dont vous essayer de modifier est introuvable !"
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