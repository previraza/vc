<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        $dte = md5(time()).sha1(time());
        if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM ue WHERE code = '$code'"))){
            mysqli_query($db, "INSERT INTO ue (`code`, `name`, `cmi`, `td`, `tp`, `ue`, `titular`, `dte`) VALUES ('$code', '$name', '$cmi', $td, '$tp', $ue[0], '$titular', '$dte')") or die(json_encode(array(
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : ".mysqli_error($db)
            )));
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "UE déjà enregistrer dans la base de données"
            ))); 
        }
        die(json_encode(array(
            "status" => "succes",
            "code" => "4200",
            "content" => $dte
        )));
    } else {
        die(json_encode(array(
            "status" => "error",
            "code" => "5020",
            "content" => "Paramètre non valide"
        ))); 
    }
?>