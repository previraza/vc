<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_POST['password']) && isset($_GET['sending_by'])){
        if($r = mysqli_fetch_array(mysqli_query($db, "SELECT password FROM accounts WHERE id = $user->id"))[0]){
            extract($_POST['password']);
            if(password_verify($a, $r) || $a == $r){
                $n = (object) ['c' => password_hash($n, PASSWORD_ARGON2I)];
                mysqli_query($db, "UPDATE accounts SET password = '$n->c' WHERE id = $user->id") or die(json_encode(array(
                    "status" => "error",
                    "code" => "5017",
                    "content" => "Error SQL : ".mysqli_error($db)
                )));
                die(json_encode(array(
                    "status" => "succes",
                    "code" => "4200",
                    "content" => "success"
                )));
            } else {
                die(json_encode(array(
                    "status" => "error",
                    "code" => "5022",
                    "content" => "Mot de passe incorrect !"
                ))); 
            }
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5021",
                "content" => "Compte Inaccèssible pour l'instant !"
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