<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($student, $resultat, $completed)){
            if($db_poo->query("SELECT * FROM students WHERE students.id = $student AND students.delete = 0 AND students.active = 1")->num_rows){
                $dte = md5(time()).sha1(time());
                $credit = $credit ?? 'NULL';
                $db_poo->query(
                    "INSERT INTO `palmares` (`student`, `resultat`, `decision`, `credit`, `completed`, `dte`) VALUES 
                        ($student, $resultat, '$mention', $credit, $completed, '$dte') 
                    ON DUPLICATE KEY UPDATE 
                        `resultat` = $resultat, `decision` = '$mention', `credit` = $credit, `completed` = $completed, `updated_at` = CURRENT_TIMESTAMP, `dte` = '$dte'"
                ) or die(json_encode(array(
                        "status" => "error",
                        "code" => "5017",
                        "content" => "Error SQL : ".$db_poo->error
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
                    "content" => "L'étudiant séléctionner n'éxiste pas dans la basse de donnée !"
                ))); 
            }
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5021",
                "content" => "Une erreur est survenu lors de l'envoie de votre requette !"
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