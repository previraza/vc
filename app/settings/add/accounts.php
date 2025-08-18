<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(!mysqli_num_rows(mysqli_query($db, "SELECT * FROM accounts WHERE email = '$email' AND `delete` = 0"))){
            $data_encrypted = md5(time()).sha1(time());
            mysqli_query($db,
            "INSERT INTO `accounts` (
                `id`, 
                `username`, 
                `fullname`, 
                `email`, 
                `role`, 
                `gender`, 
                `birthday`, 
                `Joining_date`, 
                `phone`, 
                `password`, 
                `active`, 
                `delete`, 
                `mcisme_1`, 
                `mcisme_2`, 
                `data_encrypt`
            ) VALUES (
                NULL, 
                '$username', 
                '$fullname', 
                '$email', 
                '$role', 
                '$gender', 
                '$birthday', 
                current_timestamp(), 
                '$phone', 
                '$password', 
                1, 
                0, 
                NULL, 
                NULL, 
                '$data_encrypted'
            )") or die(json_encode(array(
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : ".mysqli_error($db)
            )));

            $_SESSION["USER"] = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM accounts WHERE data_encrypt = '$data_encrypted'"));
            unset($_SESSION['USER']['password']);

            die(json_encode(array(
                "status" => "succes",
                "code" => "4200",
                "content" => $data_encrypted
            )));
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "Adresse Mail Used"
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