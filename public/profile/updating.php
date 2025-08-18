<?php session_start(); $error_response = "Une erreur s'est produit pendant l'envoie de cette requette...";
if(isset($_POST['register'], $_GET['sending_by'])){
    if(isset($_SESSION['USER'], $_SESSION['PROFILE']) && ($_SESSION['PROFILE']['role'] = 'S-ACAD' || $_SESSION['PROFILE']['role'] = 'ADMIN')){
        require_once "../../app/settings/params/connect";
        if(is_numeric($_POST['formular_id']) && $_POST['formular_id'] != 0 && $db_poo->query("SELECT * FROM register WHERE id = $_POST[formular_id] AND `delete` = 0")->num_rows){
            $query = "UPDATE `register` SET updated_at = CURRENT_TIMESTAMP, updated_by = '".$_SESSION['PROFILE']['id']."'";
            foreach (array_trait_string($_POST['inputs']) as $k => $v) $query.= ", $k = '$v'";
            $query.= " WHERE id = $_POST[formular_id]";
            if($db_poo->query($query)){
                $proof_profile='one';
            } else $error_response = "Une erreur s'est produite pendant l'enregistrement de votre requette... : ";
        } else $error_response = "Le profil que vous tentez de modifier n'est pas reconnu par le serveur, si cela persiste veuillez en référer à votre administrateur...";
    } else $error_response = "Mauvaise requette (votre requette ne comporte pas la signature de l'ISTA-Kinshasa)...";
} else $error_response = "Mauvaise requette (votre requette ne comporte pas la signature de l'ISTA-Kinshasa)...";

die(json_encode((isset($proof_profile) && ($proof_profile == 'one'))?['type'=>'success', 'content'=>'Mise à jour du formulaire effectuée avec succès !']:['type'=>'error', 'getId'=>0, 'content'=>$error_response]));