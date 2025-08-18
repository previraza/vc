<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'])){
        extract(array_trait_string($_POST));
        if(isset($user_id)){
            if(mysqli_num_rows($eqt = mysqli_query($db, "SELECT user_id FROM agents WHERE agents.id = $user_id AND agents.delete = 0 AND agents.active = 1 AND agents.valide = 1  ORDER BY title DESC, firstname"))){
                $dte = md5(time()).sha1(time());
                $account_id = mysqli_fetch_array($eqt)[0];
                $res_exist_account = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM accounts WHERE `id` = '$account_id'"));
                mysqli_query($db, ($res_exist_account ? "UPDATE" : "INSERT INTO")." `accounts` SET `username` = '$user_name',  `role` = 'agent', `password` = '$user_pass' ".($res_exist_account ? "WHERE `id` = ".$res_exist_account[0] : NULL)) or die(json_encode(array(
                        "status" => "error",
                        "code" => "5017",
                        "content" => "Error SQL : ".mysqli_error($db)
                    )));
                mysqli_query($db, "UPDATE `agents` SET `user_id` = ".($res_exist_account ? $res_exist_account[0] : mysqli_insert_id($db))." WHERE id = $user_id") or die(json_encode(array(
                    "status" => "error",
                    "code" => "5017",
                    "content" => "Error SQL : ".mysqli_error($db)
                )));
                die(json_encode(array(
                    "status" => "succes",
                    "code" => "4200",
                    "content" => "SELECT * FROM accounts WHERE `id` = '$dte'"
                )));
            } else {
                die(json_encode(array(
                    "status" => "error",
                    "code" => "5022",
                    "content" => "L'enseignant séléctionner n'éxiste pas !"
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