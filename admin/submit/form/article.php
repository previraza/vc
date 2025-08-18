<?php session_start();
    require_once '../../../app/settings/params/connect';

    if (isset($_POST['request_corps']) && $_POST['request_corps'] == 'submit_formulary_sotck_admin_add_article' && $a = $_SESSION['ADMIN']['id'])
        if (isset($_POST['article']) && $t = mysqli_traite_array($adminer, $_POST['article'])){
            $dte = 'ista_'.sha1('mcisme').md5(time());
            $tmp_file = '/public/data/articles/'.$dte.get_file_ext(end($_FILES['article']['name']));
            if (move_uploaded_file(end($_FILES['article']['tmp_name']), '../../..'.$tmp_file)){
                if(isset($_GET['article'], $_GET['activate']) && $_GET['activite'] == 'update' && is_numeric($_GET['article'])) mysqli_query($adminer, "UPDATE `articles` SET `articles`.`delete` = '1' WHERE `id` = $_GET[article]");
                mysqli_query($adminer, "INSERT INTO `articles` (`title`, `author`, `resume`, `content`, `poster`, `encrypt`) VALUES ('$t[title]', '$a', '$t[resume]', '$t[content]', '$tmp_file', '$dte')") or json_response(5004, 'Erreur Server', mysqli_error($adminer));
                json_response(5400, 'succes', 'Enregistrer avec succès...');
            } else json_response(5002, 'Problème de connexion', 'Connexion au serveur impossible, Veuillez verifier votre connexion internet...');
        } else json_response(5002, 'Données manquante', 'Votre requette semble manquer quelques données...');
    else json_response(5001, 'Mauvaise requette', 'Votre requette ne porte pas la signature du frabricant mcisme...');
