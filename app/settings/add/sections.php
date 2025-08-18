<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM sections WHERE (name = '$name' OR code = '$code') AND `delete` = 0"))){
            $dte = md5(time()).sha1(time()); $auto_passed = $auto_delib = $auto_recours = $auto_profile = 'NULL' ;
            if (isset($auto)) {
                isset($auto['deliberation']) ? $auto_delib = 1 : null ;
                isset($auto['recours']) ? $auto_recours = 1 : null ;
                isset($auto['profile']) ? $auto_profile = 1 : null ;
                isset($auto['passed']) ? $auto_passed = 1 : null ;
            }
            mysqli_query($db,
            "INSERT INTO `sections` (`id`, `titular`, `name`, auto_passed, auto_recours, auto_delib, auto_profile, `short`, `code`, `dte`, `active`, `delete`) 
                    VALUES (NULL, '$titular', '$name', $auto_passed, $auto_recours, $auto_delib, $auto_profile, '$short', '$code', '$dte', '1', '0')") or die(json_encode(array(
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
                "content" => "Section déjà enregistrer dans la base de données"
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