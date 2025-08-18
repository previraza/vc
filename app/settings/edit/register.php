<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($user_id)){
            if(mysqli_num_rows($eqt = mysqli_query($db, "SELECT id FROM register WHERE `delete` = 0 AND traite = 0 AND id = $user_id"))){
                $dte = md5(time()).sha1(time());
                $db_pdo->query("INSERT INTO `register_log` (`register`, `state`, `raison`, `message`, `dte`) VALUES ($user_id, $state, $raison, '$message','$dte'); UPDATE `register` SET `traite` = '1' WHERE `register`.`id` = $user_id");
                if($state === '0') $db_pdo->query("INSERT INTO `students_` (`std_promotion`, `matricul`, `name`, `firstname`, `lastname`, `class`, `gender`, `parent_work`, `father`, `mother`, `birthday`, `joining_date`, `email`, `speciality`, `pourcentage`, `title_code`, `address`, `phone`, `profile`, `data_encrypt`) 
                                                    SELECT 
                                                        2023, CONCAT('E22/',id), 
                                                        nom, 
                                                        postnom, 
                                                        prenom, 
                                                        $class, 
                                                        sexe, 
                                                        activite_professionnelle, 
                                                        pere, 
                                                        mere, 
                                                        date_de_naissance, 
                                                        current_timestamp(), 
                                                        email, 
                                                        section, 
                                                        pourcentage, 
                                                        numero_diplome, 
                                                        adresse, 
                                                        telephone, 
                                                        profile, 
                                                        '$dte' 
                                                        FROM 
                                                        register 
                                                    WHERE id = $user_id
                                                ");
                die(json_encode(array(
                    "status" => "succes",
                    "code" => "4200",
                    "content" => "SELECT * FROM accounts WHERE `id` = '$dte'"
                )));
            } else {
                die(json_encode(array(
                    "status" => "error",
                    "code" => "5022",
                    "content" => "La demande séléctionner est introuvable !"
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