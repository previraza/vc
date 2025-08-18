<?php session_start();
    require_once '../../../app/settings/params/connect';

    if (isset($_POST['request_corps']) && $_POST['request_corps'] == 'submit_formulary_sotck_admin_add_comment')
        if (isset($_POST['comment']) && ($t = mysqli_traite_array($adminer, $_POST['comment'])) && $dte = 'ista_'.sha1('mcisme').md5(time())){
            mysqli_query($adminer, "INSERT INTO `comments` (`author`, `content`, `email`, `phone`, `article`, `encrypt`) VALUES ('$t[author]', '$t[content]', '$t[email]', '$t[phone]', '$t[article]', '$dte')") or json_response(5004, 'Erreur Server', mysqli_error($adminer));
            json_response(5400, 'succes', 'Enregistrer avec succès...');
        } else json_response(5002, 'Données manquante', 'Votre requette semble manquer quelques données...');
    else json_response(5001, 'Mauvaise requette', 'Votre requette ne porte pas la signature du frabricant mcisme...');
?>