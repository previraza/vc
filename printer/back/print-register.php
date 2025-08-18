<?php 
   require_once '../../../settings/params/connect';
   $fc = $db_poo->query("SELECT * FROM register WHERE id = ".(isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0)) or die($db_poo->error);
   $fac = $fc->fetch_object();
   if (!empty($fac)){ $f = $fac;
?>
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible"
         content="ie=edge">
      <title>FACTURE INBTP KINSHASA NGALIEMA - <?= $f->id ?> - <?="$f->nom $f->postnom"?></title>
      <meta name="author" content="Angfuzsoft">
      <meta
         name="description" content="Invce - Invoice HTML Template">
      <meta
         name="keywords" content="Invce - Invoice HTML Template">
      <meta
         name="robots" content="INDEX,FOLLOW">
      <meta name="viewport"
         content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <link rel="icon" type="image/png" href="/public/assets/imgs/cropped-fav-180x180.png">
      <meta
         name="msapplication-TileColor" content="#ffffff">
      <meta
         name="msapplication-TileImage"
         content="assets/img/favicons/ms-icon-144x144.png">
      <meta
         name="theme-color" content="#ffffff">
      <link rel="preconnect"
         href="https://fonts.googleapis.com/">
      <link rel="preconnect"
         href="https://fonts.gstatic.com/" crossorigin>
      <link
         href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
         rel="stylesheet">
      <link rel="stylesheet"
         href="assets/css/app.min.css">
      <link rel="stylesheet"
         href="assets/css/style.css">
   </head>
   <body>
      <div
         class="invoice-container-wrap">
         <div class="invoice-container">
            <main>
               <div class="as-invoice invoice_style15">
                  <div class="download-inner" id="download_section">
                     <header class="as-header header-layout11">
                        <div class="row align-items-center justify-content-between">
                           <div class="col-auto">
                              <div class="header-logo">
                                <a href="/">
                                  <img src="/public/assets/imgs/home26.png" alt="Profil-inbtp-student" width="150px" height="150px">
                                  <span class=text-left><b>Formulaire No: </b>#<?= $f->id ?></span>
                                  <span class=text-left><b>Date d'Inscription: </b><?= $f->date ?></span>
                                </a>
                              </div>
                           </div>
                           <div class="col-auto">
                              <img src="<?= $f->profile ?>" alt="Profil-inbtp-student" width="180px" height="90px" style="width:auto">
                           </div>
                        </div>
                        <div class="svg-shape1">
                           <svg width="800" height="164" viewBox="0 0 800 164" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <mask id="mask0_102_867" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                 y="0" width="800" height="164">
                                 <path
                                    d="M800 0H0V21H109.436C162.842 21 212.664 47.8721 242 92.5C271.336 137.128 321.158 164 374.564 164H800V0Z"
                                    fill="#010F1C" />
                              </mask>
                              <g mask="url(#mask0_102_867)">
                                 <rect x="-12" y="-233" width="821" height="548" fill="#F2F2F2" />
                                 <g style="mix-blend-mode:soft-light">
                                    <rect width="800" height="164" fill="#010F1C" />
                                 </g>
                              </g>
                           </svg>
                        </div>
                     </header>
                     <div class="row justify-content-between my-4">
                        <div class="col-auto">
                           <div class="invoice-left">
                              <b>INBTP - NGALIEMA :</b>
                              <address>Institut National du Bâtiment et <br> des Travaux Publics ( INBTP en sigle )  <br>
                                 n° 21  dela Montagne, Joli-Parc, <br> Ngaliema, Kinshasa, RDC.
                              </address>
                           </div>
                        </div>
                        <div class="col-auto">
                           <div class="invoice-right">
                              <b><?="$f->nom $f->postnom"?></b>
                              <address><?=$f->adresse?>, <br><?=$f->telephone?><br>info@inbtp.ac.cd</address>
                           </div>
                        </div>
                     </div>
                     <hr class="style1">
                     <p class="table-title"><b>Informations étudiants:</b></p>
                     <table class="invoice-table table-style8">
                        <tbody>
                           <tr>
                              <th>Nom :</th>
                              <td><?=$f->nom?> </td>
                              <th>Postnom :</th>
                              <td><?=$f->postnom?></td>
                           </tr>
                           <tr>
                              <th>Prenom :</th>
                              <td><?=$f->prenom?></td>
                              <th>Genre:</th>
                              <td><?=['M'=>"Masculin", 'F'=>"Feminin", 'A'=>"Autre"][$f->sexe]?></td>
                           </tr>
                           <tr>
                              <th>Etat-civil :</th>
                              <td><?=['C'=>"Celibataire", 'M'=>"Marie(e)", 'D'=>"Divorse(e)", 'A'=>"Autre"][$f->etat_civil]?> </td>
                              <th>La religion :</th>
                              <td><?=['C'=>"Chretien", 'H'=>"Hislamiste", 'A'=>"Autre"][$f->religion]?> </td>
                           </tr>
                           <tr>
                              <th>Lieu de naissance :</th>
                              <td><?=$f->lieu_de_naissance?></td>
                              <th>Date de naissance :</th>
                              <td><?=$f->date_de_naissance?></td>
                           </tr>
                           <tr>
                              <th>Père :</th>
                              <td><?=$f->pere?></td>
                              <th>Mère :</th>
                              <td><?=$f->mere?></td>
                           </tr>
                        </tbody>
                     </table>
                     <p class="table-title"><b>Origine : </b></p>
                     <table class="invoice-table table-style8">
                        <tbody>
                           <tr>
                              <th>Nationalité:</th>
                              <td><?=$f->nationalite?></td>
                           </tr>
                           <tr>
                              <th>Province :</th>
                              <td><?=$f->province?></td>
                              <th>Térritoire :</th>
                              <td><?=$f->territoire?></td>
                           </tr>
                           <tr>
                              <th>District :</th>
                              <td><?=$f->district?></td>
                              <th>Secteur :</th>
                              <td><?=$f->secteur?></td>
                           </tr>
                        </tbody>
                     </table>
                     <p class="table-title"><b>Coordonnées:</b></p>
                     <table class="invoice-table table-style8">
                        <tbody>
                           <tr>
                              <th>Adresse du candidat :</th>
                              <td colspan="3"><?=$f->adresse?></td>
                           </tr>
                           <tr>
                              <th>Téléphone :</th>
                              <td colspan="3"><?=$f->telephone?></td>
                           </tr>
                        </tbody>
                     </table>
                     <p class="table-title"><b>Etude Secondaires:</b></p>
                     <table class="invoice-table table-style8">
                        <tbody>
                           <tr>
                              <th>Ecole :</th>
                              <td><?=$f->ecole?></td>
                              <th>Section :</th>
                              <td><?=$f->section?></td>
                           </tr>
                           <tr>
                              <th>Addresse de l'ecole:</th>
                              <td><?=$f->ecole_addresse?></td>
                              <th>Nom du centre d'examination :</th>
                              <td><?=$f->centre_exetat?></td>
                           </tr>
                           <tr>
                              <th>Lieu d'obtetion :</th>
                              <td><?=$f->ld_exetat?></td>
                              <th>Annee d'obtention :</th>
                              <td><?=$f->year_exetat?></td>
                           </tr>
                           <tr>
                              <th>Pourcentage :</th>
                              <td><?=$f->pourcentage?></td>
                              <th>Numéro du diplôme :</th>
                              <td><?=$f->numero_diplome?></td>
                           </tr>
                        </tbody>
                     </table>
                     <p class="table-title"><b>Occupations apres ses humanites:</b></p>
                     <table class="invoice-table table-style8">
                        <tbody>
                           <tr>
                              <th>Activité professionnelle :</th>
                              <td><?=$f->activite_professionnelle?></td>
                           </tr>
                           <tr>
                              <th>Etudes post-secondaire :</th>
                              <td><?=$f->autres_formations?></td>
                           </tr>
                        </tbody>
                     </table>
                     <p class="company-address style2"><b>INBTP:</b><br>n°21 De la Montagne Joli-Parc Ngaliema Kinshasa RDC</p>
                     <p class="invoice-note mt-3">
                        <svg width="13" height="16" viewBox="0 0 13 16" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.22969 12.6H9.77031V11.4H3.22969V12.6ZM3.22969 9.2H9.77031V8H3.22969V9.2ZM1.21875 16C0.89375 16 0.609375 15.88 0.365625 15.64C0.121875 15.4 0 15.12 0 14.8V1.2C0 0.88 0.121875 0.6 0.365625 0.36C0.609375 0.12 0.89375 0 1.21875 0H8.55156L13 4.38V14.8C13 15.12 12.8781 15.4 12.6344 15.64C12.3906 15.88 12.1063 16 11.7812 16H1.21875ZM7.94219 4.92V1.2H1.21875V14.8H11.7812V4.92H7.94219ZM1.21875 1.2V4.92V1.2V14.8V1.2Z"
                              fill="#1CB9C8" />
                        </svg>
                        <b>REMARQUE : </b> Après téléchargement, veuillez imprimer ce document afin de le remettre au secrétariat académique.
                     </p>
                     <div class="body-shape1"></div>
                  </div>
                  <div class="invoice-buttons">
                     <button class="print_btn">
                        <svg width="16" height="16"
                           viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M11.9688 8.46875C12.1146 8.32292 12.2917 8.25 12.5 8.25C12.7083 8.25 12.8854 8.32292 13.0312 8.46875C13.1771 8.61458 13.25 8.79167 13.25 9C13.25 9.20833 13.1771 9.38542 13.0312 9.53125C12.8854 9.67708 12.7083 9.75 12.5 9.75C12.2917 9.75 12.1146 9.67708 11.9688 9.53125C11.8229 9.38542 11.75 9.20833 11.75 9C11.75 8.79167 11.8229 8.61458 11.9688 8.46875ZM13.5 5.5C14.1875 5.5 14.7708 5.75 15.25 6.25C15.75 6.72917 16 7.3125 16 8V12C16 12.1458 15.9479 12.2708 15.8438 12.375C15.7604 12.4583 15.6458 12.5 15.5 12.5H13.5V15.5C13.5 15.6458 13.4479 15.7604 13.3438 15.8438C13.2604 15.9479 13.1458 16 13 16H3C2.85417 16 2.72917 15.9479 2.625 15.8438C2.54167 15.7604 2.5 15.6458 2.5 15.5V12.5H0.5C0.354167 12.5 0.229167 12.4583 0.125 12.375C0.0416667 12.2708 0 12.1458 0 12V8C0 7.3125 0.239583 6.72917 0.71875 6.25C1.21875 5.75 1.8125 5.5 2.5 5.5V1C2.5 0.729167 2.59375 0.5 2.78125 0.3125C2.96875 0.104167 3.1875 0 3.4375 0H10.375C10.7917 0 11.1458 0.145833 11.4375 0.4375L13.0625 2.0625C13.3542 2.35417 13.5 2.70833 13.5 3.125V5.5ZM4 1.5V5.5H12V3.5H10.5C10.3542 3.5 10.2292 3.45833 10.125 3.375C10.0417 3.27083 10 3.14583 10 3V1.5H4ZM12 14.5V12.5H4V14.5H12ZM14.5 11V8C14.5 7.72917 14.3958 7.5 14.1875 7.3125C14 7.10417 13.7708 7 13.5 7H2.5C2.22917 7 1.98958 7.10417 1.78125 7.3125C1.59375 7.5 1.5 7.72917 1.5 8V11H14.5Z"
                              fill="white" />
                        </svg>
                        <span>Imprimer</span>
                     </button>
                     <button id="download_btn" class="download_btn">
                        <svg
                           width="18" height="16" viewBox="0 0 18 16" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M16.5 9C16.9167 9 17.2708 9.14583 17.5625 9.4375C17.8542 9.72917 18 10.0833 18 10.5V14.5C18 14.9167 17.8542 15.2708 17.5625 15.5625C17.2708 15.8542 16.9167 16 16.5 16H1.5C1.08333 16 0.729167 15.8542 0.4375 15.5625C0.145833 15.2708 0 14.9167 0 14.5V10.5C0 10.0833 0.145833 9.72917 0.4375 9.4375C0.729167 9.14583 1.08333 9 1.5 9H4.375L2.9375 7.5625C2.47917 7.08333 2.375 6.54167 2.625 5.9375C2.875 5.3125 3.33333 5 4 5H6V1.5C6 1.08333 6.14583 0.729167 6.4375 0.4375C6.72917 0.145833 7.08333 0 7.5 0H10.5C10.9167 0 11.2708 0.145833 11.5625 0.4375C11.8542 0.729167 12 1.08333 12 1.5V5H14C14.6667 5 15.125 5.3125 15.375 5.9375C15.6458 6.54167 15.5417 7.08333 15.0625 7.5625L13.625 9H16.5ZM4 6.5L9 11.5L14 6.5H10.5V1.5H7.5V6.5H4ZM16.5 14.5V10.5H12.125L10.0625 12.5625C9.77083 12.8542 9.41667 13 9 13C8.58333 13 8.22917 12.8542 7.9375 12.5625L5.875 10.5H1.5V14.5H16.5ZM13.9688 13.0312C13.8229 12.8854 13.75 12.7083 13.75 12.5C13.75 12.2917 13.8229 12.1146 13.9688 11.9688C14.1146 11.8229 14.2917 11.75 14.5 11.75C14.7083 11.75 14.8854 11.8229 15.0312 11.9688C15.1771 12.1146 15.25 12.2917 15.25 12.5C15.25 12.7083 15.1771 12.8854 15.0312 13.0312C14.8854 13.1771 14.7083 13.25 14.5 13.25C14.2917 13.25 14.1146 13.1771 13.9688 13.0312Z"
                              fill="white" />
                        </svg>
                        <span>Télécharger</span>
                     </button>
                  </div>
               </div>
            </main>
         </div>
      </div>
      <script
         src="assets/js/vendor/jquery-3.6.0.min.js"></script><script
         src="assets/js/app.min.js"></script><script
         src="assets/js/main.js"></script>
   </body>
</html>
<?php }