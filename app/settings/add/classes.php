<?php session_start();
    require_once "../params/connect";
    $promo = date("Y");
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM classes WHERE option = '$option' AND  name = '$name' AND promotion = '$promo' AND `delete` = 0"))){
            $dte = md5(time()).sha1(time());
            mysqli_query($db,
            "INSERT INTO classes (`id`, `name`, `deliberable`, `titular`, `section`, `option`, `level`, `promotion`, `short`, `code`, `dte`, `active`, `delete`) 
             VALUES (NULL, '$name', '$deliberable', '$titular', '$section', '$option', '$level', '$promo', '$code', '$code', '$dte', '1', '0')") or die(json_encode(array(
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
                "content" => "Classe déjà enregistrer dans la base de données"
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