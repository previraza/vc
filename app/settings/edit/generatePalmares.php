<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($student, $periode)){
            if($db_poo->query("SELECT * FROM students WHERE students.id = $student AND students.delete = 0 AND students.active = 1")->num_rows){
                $db_poo->query("UPDATE `students` SET `students`.`finish_in` = '$periode' WHERE `students`.`id` = $student") or die(json_encode(array(
                    "status" => "error",
                    "code" => "5017",
                    "content" => "Error SQL : ".$db_poo->error
                ))); die(json_encode(array(
                    "status" => "succes",
                    "code" => "4200",
                    "content" => $dte
                )));
            } else die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "L'étudiant séléctionner n'est pas disponible !"
            ))); 
        } else die(json_encode(array(
            "status" => "error",
            "code" => "5021",
            "content" => "Une erreur est survenu lors de l'envoie de votre requette !"
        )));
    } else die(json_encode(array(
        "status" => "error",
        "code" => "5020",
        "content" => "Paramètre non valide"
    ))); 
?>