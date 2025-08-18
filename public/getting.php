<div class=half-bg></div>
<?php $error_response = "Une erreur s'est produit pendant l'envoie de cette requette...";
if (isset($_FILES['profile'])){
    if(strpos($_FILES['profile']['type'],'image/') === 0){
        if($_FILES['profile']['error'] === 0){
            if($_FILES['profile']['size']<1.5*1024*1024){
                if(isset($_POST['register'], $_GET['sending_by'])){
                    require_once "../../app/settings/params/connect";
                    if((function (Array $array = array()) : mixed { foreach ($array as $k => $v) if(!$v && !in_array($k,['email','telephone','activite_professionnelle','nom_etablissement','option','mention'])) { $GLOBALS['xn_last_no_data']=str_replace('_',' ',strtoupper($k)); return false;} return true;})($_POST['register'])){
                        extract(array_trait_string($_POST['register']));
                        if(!$db_poo->query("SELECT * FROM register WHERE ecole = '$ecole' AND nom = '$nom' AND postnom = '$postnom' AND `delete` = 0")->num_rows){
                            $dte = md5(time()).sha1(time());
                            $fdir = "public/data/students/files/profile/";
                            $fname = $dte.ext_file($_FILES['profile']['full_path']);
                            $_POST['register']['profile'] = $profile = '/'.$fdir.$fname;
                            if(move_uploaded_file($_FILES['profile']['tmp_name'], load_directory($fdir).$fname)){
                                if($db_poo->query("INSERT INTO `register` (`nom`, `postnom`, `profile`, `lieu_de_naissance`, `date_de_naissance`, `sexe`, `etat_civil`, `pere`, `mere`, `pays`, `province`, `territoire`, `secteur`, `adresse`, `telephone`, `email`, `ecole`, `section`, `pourcentage`, `numero_diplome`, `nom_etablissement`, `option`, `mention`, `activite_professionnelle`, `promotion_1`, `promotion_2`, `numero_bordereau`, `active`, `delete`, `MCISME_1`, `MCISME_2`, `dte`) 
                                                        VALUES ('$nom', '$postnom', '$profile', '$lieu_de_naissance', '$date_de_naissance', '$sexe', '$etat_civil', '$pere', '$mere', '$pays', '$province', '$territoire', '$secteur', '$adresse', '$telephone', '$email', '$ecole', '$section', '$pourcentage', '$numero_diplome', '$nom_etablissement', '$option', '$mention', ''$activite_professionnelle, '$promotion_1', '$promotion_2', '$numero_bordereau', '1', '0', 'MCISME_EN_1', '', '$dte');")){
                                    $proof_profile='one';
                                    $user = (object) $_POST['register'];
                                    $mine = $db_poo->insert_id;
                                } else $error_response = "Une erreur s'est produite pendant l'enregistrement de votre requette...";
                            } else $error_response = "Une erreur s'est produite pendant la mise en ligne de votre Photo Passport...";
                        } else $error_response = "Votre profile semble déjà enregistrer sur notre serveur, veuillez passer dans nos services d'inscription pour plus d'informations...";
                    } else $error_response = "Veuillez remplir tous le champs avent l'envoie de votre formulaire (le champs \"$xn_last_no_data\" est incomplet)...";
                } else $error_response = "Mauvaise requette (votre requette ne comporte pas la signature de l'ISTA-Kinshasa)...";
            } else $error_response = "Votre image est trop volumineux (veuillez choisir une Photo Passport de moins de 1.5 MB)...";
        } else $error_response = "Une erreur s'est produit pendant le téléchargement de votre Photo Passport (veuillez réessayer plus tard)...";
    } else $error_response = "Type de Photo Passeport non prise en charge...";
} else $error_response = "Aucune image profile detecter...";
if (isset($proof_profile) && ($proof_profile == 'one')) { ?>
    <div class=page>
        <div class=page-content>
            <header id=site_header class="header mobile-menu-hide smoke">
                <div class=header-content>
                    <div class=header-lng>
                        <ul>
                            <li><a href=# class=active>Fr</a></li>
                            <li><a href=#>En</a></li>
                        </ul>
                    </div>
                    <div class=header-photo><img src="<?=file_exists(__DIR__.DS.'..'.DS.'..'.DS.$user->profile) ? $user->profile : '/public/assets/images/profile.webp'?>" alt="Alex Smith"></div>
                    <div class=header-titles>
                        <h2><?="$user->nom $user->postnom"?></h2>
                        <h4><?=$user->sexe?></h4>
                    </div>
                </div>
                <div class=social-links>
                    <ul>
                        <li><a href=# target=_blank><i class="fab fa-twitter"></i></a></li>
                        <li><a href=# target=_blank><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href=https://bit.ly/3c81SWE target=_blank><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
                <div class=info-list>
                    <ul>
                        <li><span class=value><?=$user->telephone?></span></li>
                        <li><span class=value><?=$user->email?></span></li>
                    </ul>
                </div>
                <div class=header-buttons><a href=#data-download-<?=time()?> onclick="JavaScript:window.downloadNode('#modal-section>div.page>div>div.content-area>div>section>div')" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a><a href=#data-print-<?=$mine?>&salt=<?=time()?> onclick='JavaScript:window.print()' class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Imprimer</a></div>
                <div class=copyrights>Institut Supérieur de Techniques Appliquées</div>
            </header>
            <div class=lmpixels-arrows-nav>
                <div class="lmpixels-arrow-left close" id="close-modal-profile"><i class="fa fa-times fw-lighter fa-2x"></i></div>
            </div>
            <div class=content-area>
                <div class=animated-sections>
                    <section data-id=resume class="animated-section section-active">
                        <div class=section-content>
                            <div class='page-title row'>
                                <div class=col>
                                    <h2>Demande d'Inscription Académique</h2>
                                    <h4>Formulaire numéro : <?=time()?> | date : <?=date('d-m-Y H:i:s');?></h4>
                                </div>
                                <div class=col-auto style=display:none;>
                                    <div class="text-center fa-2x p-0 text-info certi-logo">
                                        <img src="<?=$user->profile?>" alt="Logo ISTA-Kinshasa" width="100%" height="100%">
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-xs-12 col-sm-12">
                                    <div class=block-title>
                                        <script>document.title = "Institut Supérieur de Techniques Appliquées | Démande d'inscription | <?="$user->nom $user->postnom"?>";</script>
                                        <h3>Enregistrement | <?="$user->nom $user->postnom"?> | N° <?=$mine?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-xs-12 col-sm-8">
                                    <div class="certificate-item clearfix">
                                        <div class="text-center fa-2x p-0 text-info certi-logo">
                                            <img src="<?=$user->profile?>" alt="Logo ISTA-Kinshasa" width="100%" height="100%">
                                        </div>
                                        <div class=certi-content>
                                            <div class=certi-title>
                                                <h4><?="$user->nom $user->postnom"?></h4>
                                            </div>
                                            <div class=certi-id><span><?=$user->email?$user->email:$user->telephone?></span></div>
                                            <div class=certi-company><span><?=$user->sexe?> / <?=2022-(int)$user->date_de_naissance?> ans</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="certificate-item clearfix">
                                        <div class="text-center fa-2x p-0 text-success certi-logo">
                                            <img src="/layouts/default/icon/favicon.webp" alt="Logo ISTA-Kinshasa" width="100%" height="100%">
                                        </div>
                                        <div class=certi-content>
                                            <div class=certi-title><h4>ISTA-KIN</h4></div>
                                            <div class=certi-id><span>Inscription</span></div>
                                            <div class=certi-company><span><?= 2022 ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=white-space-50></div>
                            <div class=row>
                                <div class=col-xs-12>
                                    <div class="block-title border-bottom w-100">
                                        <div class="h1 fa-2x">Identité</div>
                                    </div>
                                    <div class="skills-info skills-second-style row">
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Nom</div>
                                            <h3 class="value"><?=$user->nom?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Postnom</div>
                                            <h3 class="value"><?=$user->postnom?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Lieu de naissance</div>
                                            <h3 class="value"><?=$user->lieu_de_naissance?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Date de naissance</div>
                                            <h3 class="value"><?=$user->date_de_naissance?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Genre </div>
                                            <h3 class="value"><?=$__SNEN_genre[$user->sexe]?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Etat-civil</div>
                                            <h3 class="value"><?=$__SNEN_etat_civil[$user->etat_civil]?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Père </div>
                                            <h3 class="value"><?=$user->pere?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Mère</div>
                                            <h3 class="value"><?=$user->mere?></h3>
                                        </div>
                                    </div>
                                    <div class=white-space-10></div>
                                    <div class="block-title border-bottom w-100">
                                        <div class="h1 fa-2x">Origine</div>
                                    </div>
                                    <div class="skills-info skills-second-style row">
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Pays</div>
                                            <h3 class="value"><?=$user->pays?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Province</div>
                                            <h3 class="value"><?=$user->province?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Térritoire</div>
                                            <h3 class="value"><?=$user->territoire?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Secteur</div>
                                            <h3 class="value"><?=$user->secteur?></h3>
                                        </div>
                                    </div>
                                    <div class=white-space-10></div>
                                    <div class="block-title border-bottom w-100">
                                        <div class="h1 fa-2x">Coordonnées</div>
                                    </div>
                                    <div class="skills-info skills-second-style row">
                                        <div class="col-12 content-valoris">
                                            <div class="title text-info pt-3">Adresse du candidat</div>
                                            <h3 class="value"><?=$user->adresse?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Téléphone</div>
                                            <h3 class="value"><?=$user->telephone?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">E-mail</div>
                                            <h3 class="value"><?=$user->email?></h3>
                                        </div>
                                    </div>
                                    <div class=white-space-10></div>
                                    <div class="block-title border-bottom w-100">
                                        <div class="h1 fa-2x">Etude Secondaires</div>
                                    </div>
                                    <div class="skills-info skills-second-style row">
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Ecole</div>
                                            <h3 class="value"><?=$user->ecole?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Section</div>
                                            <h3 class="value"><?=$user->section?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Pourcentage</div>
                                            <h3 class="value"><?=$user->pourcentage?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Numéro du diplôme</div>
                                            <h3 class="value"><?=$user->numero_bordereau?></h3>
                                        </div>
                                    </div>
                                    <div class=white-space-10></div>
                                    <div class="block-title border-bottom w-100">
                                        <div class="h1 fa-2x">Etude Supérieurs</div>
                                    </div>
                                    <div class="skills-info skills-second-style row">
                                        <div class="col-12 content-valoris">
                                            <div class="title text-info pt-3">Etablissement</div>
                                            <h3 class="value"><?=$user->nom_etablissement?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Option</div>
                                            <h3 class="value"><?=$user->option?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Mention</div>
                                            <h3 class="value"><?=$user->mention?></h3>
                                        </div>
                                    </div>
                                    <div class=white-space-10></div>
                                    <div class="block-title border-bottom w-100">
                                        <div class="h1 fa-2x">Occupation</div>
                                    </div>
                                    <div class="skills-info skills-second-style row">
                                        <div class="col-12 content-valoris">
                                            <div class="title text-info pt-3">Activité professionnelle</div>
                                            <h3 class="value"><?=$user->telephone?></h3>
                                        </div>
                                    </div>
                                    <div class=white-space-10></div>
                                    <div class="block-title border-bottom w-100">
                                        <div class="h1 fa-2x">Choix promotion</div>
                                    </div>
                                    <div class="skills-info skills-second-style row">
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Premier choix</div>
                                            <h3 class="value"><?=$user->promotion_1?></h3>
                                        </div>
                                        <div class="col-6 content-valoris">
                                            <div class="title text-info pt-3">Deuxième choix</div>
                                            <h3 class="value"><?=$user->promotion_2?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
<div class=page>
    <div class=page-content>
        <div class=lmpixels-arrows-nav>
            <div class="lmpixels-arrow-left close" id="close-modal-profile"><i class="fa fa-times fw-lighter fa-2x"></i></div>
        </div>
        <div class=content-area>
            <div class=animated-sections>
                <section data-id=resume class="animated-section section-active">
                    <div class=section-content>
                        <div class=page-title>
                            <h2>Echèc d'enregistrement...</h2>
                            <h4>Etudiants / Inscription / Echèc</h4>
                        </div>
                        <div class=row>
                            <div class="col-xs-12 col-sm-12">
                                <div class='block-title border-bottom w-100'>
                                    <h3><?=$error_response?></h3>
                                    <!-- <pre><?php print_r($_POST); ?></pre> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php }