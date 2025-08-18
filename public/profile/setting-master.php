<?php $error_response = "Une erreur s'est produit pendant l'envoie de cette requette...";
$option='Opt';
if (isset($_FILES['profile'])){
    if(strpos($_FILES['profile']['type'],'image/') === 0){
        if($_FILES['profile']['error'] === 0){
            if($_FILES['profile']['size']<1.5*1024*1024){
                if(isset($_POST['register'], $_GET['sending_by'])){
                    require_once "../../app/settings/params/connect";
                    if((function (Array $array = array()){foreach ($array as $k => $v) if(!$v && !in_array($k,['telephone','activite_professionnelle','autres_formations','option'])) { $GLOBALS['xn_last_no_data']=str_replace('_',' ',strtoupper($k)); return false;} return true;})($_POST['register'])){
                        extract(array_trait_string($_POST['register']));
                        if(!$db_poo->query("SELECT * FROM register WHERE ecole = '$ecole' AND nom = '$nom' AND postnom = '$postnom' AND  prenom = '$prenom' AND `delete` = 0")->num_rows){
                            if($db_poo->query("SELECT * FROM payments WHERE number = '$numero_bordereau' AND student = 0 AND active = 1 AND valide = 1 AND `delete` = 0")->num_rows){
                                $dte = md5(time()).sha1(time());
                                $fdir = "public/data/students/files/profile/";
                                $fname = $dte.ext_file($_FILES['profile']['full_path']);
                                $_POST['register']['profile'] = $profile = '/'.$fdir.$fname;
                                if(move_uploaded_file($_FILES['profile']['tmp_name'], load_directory($fdir).$fname)){
                                    if($db_poo->query("INSERT INTO `register` (`nom`, `nom`, `postnom`, `prenom`, `profile`, `lieu_de_naissance`, `date_de_naissance`, `sexe`, `etat_civil`, `pere`, `mere`, `pays`, `province`, `territoire`, `secteur`, `adresse`, `telephone`, `ecole`, `section`, `pourcentage`, `numero_diplome`, `autres_formations`, `option`, `activite_professionnelle`, `numero_bordereau`, `active`, `delete`, `MCISME_1`, `MCISME_2`, `dte`) 
                                                    VALUES ('master', '$nom', '$postnom', '$prenom', '$profile', '$lieu_de_naissance', '$date_de_naissance', '$sexe', '$etat_civil', '$pere', '$mere', '$pays', '$province', '$territoire', '$secteur', '$adresse', '$telephone', '$ecole', '$section', '$pourcentage', '$numero_diplome', '$autres_formations', '$option', '$activite_professionnelle', '$numero_bordereau', 1, 0, 'MCISME_EN_1', '', '$dte');") or die($db_poo->error)){
                                        $proof_profile='one';
                                        $mine = $db_poo->insert_id;
                                        $db_poo->query("UPDATE `payments` SET `student` = $mine WHERE number = '$numero_bordereau';");
                                    } else $error_response = "Une erreur s'est produite pendant l'enregistrement de votre requette... : ";
                                } else $error_response = "Une erreur s'est produite pendant la mise en ligne de votre Photo Passport...";
                            } else $error_response = "N° Bordereau invalide (incorrect, invalide ou déjà utilisé)";
                        } else $error_response = "Votre profile semble déjà enregistrer sur notre serveur, veuillez passer dans nos services d'inscription pour plus d'informations...";
                    } else $error_response = "Veuillez remplir tous le champs avent l'envoie de votre formulaire (le champs \"$xn_last_no_data\" est incomplet)...";
                } else $error_response = "Mauvaise requette (votre requette ne comporte pas la signature de l'ISTA-Kinshasa)...";
            } else $error_response = "Votre image est trop volumineux (veuillez choisir une Photo Passport de moins de 1.5 MB)...";
        } else $error_response = "Une erreur s'est produit pendant le téléchargement de votre Photo Passport (veuillez réessayer plus tard)...";
    } else $error_response = "Type de Photo Passeport non prise en charge...";
} else $error_response = "Aucune image profile detecter...";
die(json_encode((isset($proof_profile) && ($proof_profile == 'one'))?['type'=>'success', 'getId'=>$mine, 'content'=>'Enregistrer avec succes !']:['type'=>'error', 'getId'=>0, 'content'=>$error_response]));