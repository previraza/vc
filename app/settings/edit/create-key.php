<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($user_id)){
            if(mysqli_num_rows($eqt = mysqli_query($db, "SELECT user_id FROM students WHERE students.id = $user_id AND students.delete = 0 AND students.active = 1 AND students.valide = 1 ORDER BY firstname"))){
                $key = (function ($id, $code) {
                    $res = base_convert($id,10,36);
                    while (strlen($res) < 12) $res.= base_convert(rand(1,36),10,36);
                    return $code.'-'.strtoupper(implode('-', str_split(substr($res,0,12), 4)));
                })($user_id, $key_code);
                mysqli_query($db, "UPDATE `students` SET `key` = '$key' WHERE id = $user_id") or die(json_encode(array(
                    "status" => "error",
                    "code" => "5017",
                    "content" => "Error SQL : ".mysqli_error($db)
                )));
                die(json_encode(array(
                    "status" => "succes",
                    "code" => "4200",
                    "content" => "$key"
                )));
            } else {
                die(json_encode(array(
                    "status" => "error",
                    "code" => "5022",
                    "content" => "L'étudiant séléctionner n'éxiste pas !"
                ))); 
            }
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5021",
                "content" => "Une erreur est survenu lors de votre requette !"
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