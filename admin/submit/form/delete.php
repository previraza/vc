e<?php session_start();
    require_once '../../../app/settings/params/connect';

    if (isset($_POST['request_corps']) && $_POST['request_corps'] == 'submit_formulary_sotck_admin_add_article' && $a = $_SESSION['ADMIN']['id'])
        if (isset($_POST['article']) && $t = mysqli_traite_array($adminer, $_POST['article'])){
            mysqli_query($adminer, "INSERT INTO `articles` (`title`, `author`, `resume`, `content`, `poster`, `encrypt`) VALUES ('$t[title]', '$a', '$t[resume]', '$t[content]', '$tmp_file', '$dte')") or json_response(5004, 'Erreur Server', mysqli_error($adminer));
            json_response(5400, 'succes', 'Enregistrer avec succès...');
        } else json_response(5002, 'Données manquant', 'Votre requette semble manquer quelques données...');
    else json_response(5001, 'Mauvaise requette', 'Votre requette ne porte pas la signature du frabricant mcisme...');
?>
