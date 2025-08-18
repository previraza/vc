<?php session_start();
    require_once "../params/connect";
    if(!($file = isset($_FILES['profile']) ? $_FILES['profile'] : false)) die(json_encode([
        "status" => "error","code" => "4100","content" => 'Impossible de charger l\'image'
    ]));
    if($file['size'] > .5*1024*1024) die(json_encode([
        "status" => "error","code" => "4101","content" => 'Image trop volumineux'
    ]));
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST)); 
        $role = isset($role) ? $role : 'NULL';
        $promotion = isset($promotion) ? $promotion : date("Y");
        $biographie = isset($biographie) ? $biographie : 'NULL';
        $promotion--;
        (isset($wabtech) && $wabtech == 'started') ? $this_class = 0 : 
        $pre_rqt = mysqli_query($db, "SELECT id FROM classes WHERE section = '$section' AND option = '$option' AND level = '$level' AND promotion = '$promotion' AND active = 1 AND `delete` = 0");

        if(isset($this_class));elseif(mysqli_num_rows($pre_rqt))$this_class = mysqli_fetch_array($pre_rqt)[0];else {
            die(json_encode([
                "status" => "error",
                "code" => "5021",
                "content" => "Class don't Exist"
            ])); 
        }
        if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM students WHERE (firstname = '$firstname' AND lastname = '$lastname' AND class = '$this_class') AND `delete` = 0 ORDER BY firstname"))){
            $dte = md5(time()).sha1(time());
            mysqli_query($db,
                            "INSERT INTO `students` (
                                `id`, 
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
                                `religion`, 
                                `biographie`, 
                                `Joining_date`, 
                                `role`, 
                                `class`, 
                                `email`, 
                                `address`, 
                                `phone`, 
                                `active`, 
                                `delete`, 
                                `mcisme_1`, 
                                `mcisme_2`, 
                                `data_encrypt`
                            ) VALUES (
                                NULL, 
                                '$mine', 
                                 $username, 
                                '$firstname', 
                                '$lastname', 
                                '$gender', 
                                '$parent_work', 
                                '$title', 
                                '$speciality', 
                                '$pourcentage', 
                                '$titleCode', 
                                '$father', 
                                '$mother', 
                                '$birthday', 
                                '$religion', 
                                '$biographie', 
                                current_timestamp(), 
                                '$role', 
                                '$this_class', 
                                '$email', 
                                '$address', 
                                '$phone', 
                                1, 
                                0, 
                                NULL, 
                                NULL, 
                                '$dte'
                            )") or die(json_encode([
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : ".mysqli_error($db)
            ]));
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
