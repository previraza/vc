<?php session_start();
    $profile = '/layouts/default/img/figure/admin.webp';


    
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM agents WHERE firstname = '$firstname' AND lastname = '$lastname' AND `delete` = 0 AND phone = '$phone' OR (role = '$role' AND (role = 'DG' OR role = 'DC' OR role = 'DR' OR role = 'AB' OR role = 'SG'))"))){
            $dte = md5(time()).sha1(time());
            mysqli_query($db,
                    "INSERT INTO `agents` (
                        `id`, 
                        `user_id`, 
                        `username`, 
                        `firstname`, 
                        `lastname`, 
                        `gender`, 
                        `birthday`, 
                        `father`, 
                        `mother`, 
                        `work`, 
                        `department`, 
                        `role`, 
                        `matricul`, 
                        `email`, 
                        `address`, 
                        `religion`, 
                        `phone`, 
                        `profile`, 
                        `biographie`, 
                        `Joining_date`, 
                        `title`, 
                        `valide`, 
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
                        '$birthday', 
                        '$father', 
                        '$mother', 
                        '$work', 
                        '$department', 
                        '$role', 
                        '$matricul', 
                        '$email', 
                        '$address', 
                        '$religion', 
                        '$phone', 
                        '$profile', 
                        '$biographie', 
                        current_timestamp(), 
                        '$title', 
                        '0', 
                        '1', 
                        '0', 
                        NULL, 
                        NULL, 
                        '$dte'
                    )"
                ) or die(json_encode(array(
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : ".mysqli_error($db)
                ))
            );

            die(json_encode(array(
                "status" => "succes",
                "code" => "4200",
                "content" => $dte
            )));
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "Profile déjà enregistrer dans la base de données"
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