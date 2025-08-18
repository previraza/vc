<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47'], $_GET['sending_by'], $_FILES['file']) && $f = $_FILES['file']){    
        $profile = "/app/datas/accounts/files/profile/images/".time().md5($f['type']).ext_file($f['name']);
        if(copy($f['tmp_name'], __DIR__.DIRECTORY_SEPARATOR.'../../..'.$profile)){
            $n = (object) ['profile' => str_replace('\\', '/', str_replace(str_replace('/', DS, $_SERVER['DOCUMENT_ROOT']), '', str_replace('/', DS, $profile)))];
            mysqli_query($db, "UPDATE accounts SET profile = '$n->profile' WHERE id = $user->id") or die(json_encode(array(
                "status" => "error",
                "code" => "5017",
                "content" => "Error SQL : ".mysqli_error($db)
            )));
            $_SESSION['USER']['profile'] = $n->profile;;
            die(json_encode(array(
                "status" => "succes",
                "code" => "4200",
                "content" => "success"
            )));
        } else {
            die(json_encode(array(
                "status" => "error",
                "code" => "5022",
                "content" => "Erreur de mise en ligne"
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