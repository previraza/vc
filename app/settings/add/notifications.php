<?php session_start();
    require_once "../params/connect";
    if(isset($_POST['CON_47']) && isset($_GET['sending_by'])){
        extract(mysqli_traite_array($db, $_POST));
        $dte = md5(time()).sha1(time()); $id = $user->id;
        if(!$title || !$content)die(json_encode(array(
            "status" => "error",
            "code" => "5017",
            "content" => "USER : Veuillez completer le formulaire."
        )));
        if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM notifications WHERE user_id = $id AND content='$content' AND title='$title'")))die(json_encode(array(
            "status" => "error",
            "code" => "5020",
            "content" => "Notification de publier dans l'application..."
        )));
        mysqli_query($db, "INSERT INTO `notifications` (`id`, `user_id`, `posted_by`, `posted_on`, `posted_to`, `title`, `content`, `posted_date`, `active`, `delete`, `mcisme_1`, `mcisme_2`, `data_encrypt`) VALUES (NULL, $id, '$posted_by', '$posted_on', '$posted_to', '$title', '$content', CURRENT_TIMESTAMP, 1, 0, NULL, NULL, '$dte')")
        or die(json_encode(array(
            "status" => "error",
            "code" => "5017",
            "content" => "Error SQL : ".mysqli_error($db)
        )));
        die(json_encode(array(
            "status" => "succes",
            "code" => "4200",
            "content" => $dte
        )));
    } else {
        die(json_encode(array(
            "status" => "error",
            "code" => "5020",
            "content" => "Paramètre non valide"
        ))); 
    }
?>