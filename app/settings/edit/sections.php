<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_POST['mine']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        mysqli_query($db,
        "UPDATE sections SET name = '$name', titular = '$titular', code = '$code', short = '$short' WHERE id = $mine;") or die(json_encode(array(
            "status" => "error",
            "code" => "5017",
            "content" => "Error SQL : ".mysqli_error($db)
        )));

        die(json_encode(array(
            "status" => "succes",
            "code" => "4200",
            "content" => $mine
        )));
    } else {
        die(json_encode(array(
            "status" => "error",
            "code" => "5020",
            "content" => "Paramètre non valide"
        ))); 
    }
?>