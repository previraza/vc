<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_POST['id'])){
        if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM cotes WHERE id = $_POST[id]"))){
            mysqli_query($db,"UPDATE cotes SET recours = 1, recours_date = current_timestamp() WHERE cotes.id = $_POST[id];") or die(json_encode(array(
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : ".mysqli_error($db)
            )));
                
            die(json_encode(array(
                "status" => "succes",
                "code" => "4200",
                "content" => $_POST['id']
            )));
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "La cote selectionner est innacéssible..."
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