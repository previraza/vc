<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        $rqt = mysqli_query($db, "SELECT id FROM classes WHERE section = $section AND option = $option AND level = $level AND promotion = '$promotion' AND `delete` = 0");
        if(mysqli_num_rows($rqt)){
            while($r = mysqli_fetch_array($rqt)){
                $dte = md5(time()).sha1(time());
                if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM courses WHERE name = '$name' AND part = $part AND courses.delete = 0 AND class = '$r[0]' AND `delete` = 0"))){
                    mysqli_query($db,
                            "INSERT INTO courses (`name`, `titular`, `part`, `credit`, `class`, `short`, `code`, `dte`) VALUES ('$name', '$titular', $part, '$credit', $r[0], '$code', '$code', '$dte')") or die(json_encode(array(
                                "status" => "error",
                                "code" => "5017",
                                "content" => "Error SQL : ".mysqli_error($db)
                            )));
                } else {
                    die(json_encode(array(
                        "status" => "error",
                        "code" => "5022",
                        "content" => "Course déjà enregistrer dans la base de données"
                    ))); 
                }
            }
            die(json_encode(array(
                "status" => "succes",
                "code" => "4200",
                "content" => $dte
            )));
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "La classe sélectionner n'existe pas !"
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