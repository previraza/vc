<?php session_start();
    require_once '../../../app/settings/params/connect';
    if(isset($_SESSION['ADMIN']['id']) && is_numeric($_SESSION['ADMIN']['id'])){
        $me = $_SESSION['ADMIN']['id'];
        if (isset($_POST['request_corps']) && $_POST['request_corps'] == 'submit_formulary_sotck_admin_add_teacher' && $a = $_SESSION['ADMIN']['id'])
            if (isset($_POST['doc_title'], $_POST['doc_resume'], $_POST['teacher']) && is_numeric($_POST['teacher'])){
                $get_teacher = $db_poo->query("SELECT id FROM teachers WHERE id = $_POST[teacher] AND `delete` = 0");
                if ($get_teacher->num_rows && $id = $get_teacher->fetch_object()->id){
                    $tmp_rqt = "INSERT INTO `publications` (`title`, `author`, `addedby`, `resume`,  `file`, `encrypt`) VALUES "; $tmp_spc = '';
                    $doc_title = array_trait_string($_POST['doc_title'],$db);
                    $doc_resume = array_trait_string($_POST['doc_resume'],$db); $exist = [];
                    foreach ($_FILES['doc']['name'] as $k => $value) { $dte = time().'_'.$_FILES['doc']['name'][$k];
                        $tmp_file = '/public/data/teacher-docs/'.$dte.'.'.get_file_ext($_FILES['doc']['name'][$k]);
                        if ($db_poo->query("SELECT id FROM publications WHERE author=$id AND title='$doc_title[$k]'")->num_rows) $exist[]=$doc_title[$k];
                        elseif (move_uploaded_file($_FILES['doc']['tmp_name'][$k], '../../..'.$tmp_file)) {
                            $add = false;
                            $tmp_rqt.= $tmp_spc."('$doc_title[$k]', $id, $me, '$doc_resume[$k]', '$tmp_file', 'DTE_MCISME_LIKE - $dte')";
                            $tmp_spc = ', ';
                        } 
                    } 
                    function escapade($a){ return "";
                        $t='<br/> Le(s) document(s) :<ul>';foreach ($a as $v) $t.="<li>$v</li>";$t.= "</ul><br\>existe déjà dans la base de données";return $t;
                    }
                    isset($add) ? $db_poo->query($tmp_rqt.';') :  json_response(5400, 'Aucun Fichier détécter !', (!empty($exist)?escapade($exist):'Données déjà existants dans la base de données'));
                    json_response(5400, 'succes', 'Enregistrer avec succès...'.(!empty($exist)?escapade($exist):NULL));
                } else json_response(5002, 'Aucun professeur trouvé', 'L\'enseignant que vous essayez de sauvegarder est introuvable pour le moment...');
            } else json_response(5002, 'Données manquante', 'Veuillez remplir votre formulaire...');
        else json_response(5001, 'Mauvaise requette', 'Votre requette ne porte pas la signature du frabricant mcisme...');
    } else json_response(5001, 'Aucune Autorisation', 'Vous n\'etes pas autorisé à publier des articles des enseignants...');
