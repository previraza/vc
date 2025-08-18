<?php session_start();
    function errAd($dte, $table, $err){
        mysqli_query($db, "DELETE FROM `$table` WHERE `data_encrypt` = $dte") OR die(json_encode([
            "status" => "error",
            "code" => "4221",
            "content" => "Votre requette s'est mal terminer !"
        ])) ;
        return json_encode([
            "status" => "error",
            "code" => "5017",
            "content" => "Error SQL : ".$err
        ]);
    }

    require_once "../params/connect";
    if(!($file = isset($_FILES['profile']) ? $_FILES['profile'] : false)) die(json_encode([
        "status" => "error","code" => "4100","content" => 'Impossible de charger l\'image'
    ]));
    if($file['size'] > .5*1028*1028) die(json_encode([
        "status" => "error","code" => "4101","content" => 'Image trop volumineux'
    ]));
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST)); 
        if(mysqli_num_rows($pre_rqt = mysqli_query($db, "SELECT id FROM classes WHERE section = '$section' AND option = '$option' AND level = '$level' AND promotion = '$promotion' AND active = 1 AND `delete` = 0"))) $this_class = mysqli_fetch_array($pre_rqt)[0];
        else die(json_encode([
            "status" => "error",
            "code" => "5021",
            "content" => "La classe dans la promotion selectionner n'existe pas !"
        ])); 

        if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM students WHERE CONCAT(firstname, ' ',lastname) = '$user_name' AND id = '$user_id' AND class != $this_class AND `delete` = 0 ORDER BY firstname"))){
            $dte = md5(time()).sha1(time());
            $profile = "`profile`";
            if($file['size']){
                $profile = load_directory("datas/students/files/'$user_id'/images/").$dte.ext_file($file['full_path']);    
                if(!move_uploaded_file($file['tmp_name'], $profile)) die(json_encode(["status" => "error", "code" => "5022", "content" => "Erreur de mise en ligne"])); 
                $profile = "$profile";
            }
            mysqli_query($db,
                            "INSERT INTO `students` (
                                `user_id`, 
                                `username`, 
                                `firstname`, 
                                `lastname`, 
                                `gender`, 
                                `parent_work`, 
                                `title`, 
                                `speciality`, 
                                `pourcentage`, 
                                `title_code`, 
                                `father`, 
                                `mother`, 
                                `birthday`, 
                                `profile`, 
                                `religion`, 
                                `biographie`, 
                                `Joining_date`, 
                                `std_promotion`, 
                                `role`, 
                                `class`, 
                                `email`, 
                                `address`, 
                                `phone`, 
                                `valide`, 
                                `active`, 
                                `suspend`, 
                                `mcisme_1`, 
                                `mcisme_2`, 
                                `data_encrypt`
                            ) SELECT 
                                `user_id`, 
                                `username`, 
                                `firstname`, 
                                `lastname`, 
                                `gender`, 
                                `parent_work`, 
                                `title`, 
                                `speciality`, 
                                `pourcentage`, 
                                `title_code`, 
                                `father`, 
                                `mother`, 
                                `birthday`, 
                                $profile, 
                                `religion`, 
                                `biographie`, 
                                `Joining_date`, 
                                $promotion, 
                                `role`, 
                                '$this_class', 
                                `email`, 
                                `address`, 
                                `phone`, 
                                `valide`, 
                                `active`, 
                                `suspend`, 
                                'mcisme_1', 
                                `mcisme_2`, 
                                '$dte'
                            FROM students WHERE `students`.`id` = $user_id ORDER BY firstname
                            ") or die(errAd($dte, "deliberation", mysqli_error($db)));
            mysqli_query($db, "UPDATE `deliberation` SET `passed` = 1 WHERE `deliberation`.`student` = $user_id") or die(errAd($dte, "students", mysqli_error($db)));
            mysqli_query($db, "UPDATE `students` SET `active` = 0 WHERE `students`.`id` = $user_id") or die(errAd($dte, "students", mysqli_error($db)));
            die(json_encode([
                "status" => "succes",
                "code" => "4200",
                "content" => $dte
            ]));
        } else {
            die(json_encode([
                "status" => "error",
                "code" => "5022",
                "content" => "Etudiant déjà enregistrer dans la base de données"
            ])); 
        }
    } else {
        die(json_encode([
            "status" => "error",
            "code" => "5020",
            "content" => "Paramètre non valide"
        ])); 
    }
?>
