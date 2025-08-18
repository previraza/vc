<?php session_start();
require_once '../../../settings/params/connect';
function write_sum($sum, $devise) {
    if ($devise === 'USD') return '$' . $sum . '.00';
    if ($devise === 'FC') return $sum . '.00' . ' Fc';
} ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CODES DE DÉLIBÉRATION -- ISTA KINSHASA - <?= $f->student ?></title>
    <meta name="author" content="Angfuzsoft">
    <meta name="description" content="Invce - Invoice HTML Template">
    <meta name="keywords" content="Invce - Invoice HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/public/assets/imgs/cropped-fav-180x180.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .invoice-table th, .invoice-table td {
            padding: 5px 20px;
        }
        .as-invoice .download-inner{
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php if($class = $db_poo->query("SELECT classes.id, classes.titular, CONCAT(level.name, ' - ', options.name) AS name FROM classes JOIN level ON level.id = classes.level JOIN options ON options.id = classes.option WHERE classes.active = 1 AND classes.delete = 0 AND classes.id = ".(isset($_GET['class'])&&is_numeric($_GET['class'])?$_GET['class']:-1))->fetch_object()) {
            $user = (object) $_SESSION['PROFILE'];
            if($user && (
                    $user->role === 'ADMIN' || 
                    $user->role === 'DG' || 
                    $user->role === 'SG' || 
                    $user->role === 'SR' || 
                    $user->role === 'AB' || 
                    $user->user_id == $class->titular
                )) { ?>
            <div class="invoice-container-wrap">
                <div class="invoice-container my-0" style="background-color: #fff;">
                    <?php $rqt = $db_poo->query("SELECT `id`, `key`, CONCAT(`firstname`, ' ', `lastname`) AS name FROM students WHERE class = $class->id AND students.delete = 0") or die($db_poo->error); 
                            while($f = $rqt->fetch_object()) { ?>
                    <main class='row d-flex align-items-center'>
                        <div class="as-invoice invoice_style2 col">
                            <div class="download-inner" id="download_section">
                                <header class="as-header header-layout1 border-top pt-2">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-auto" style="padding:10px 0px 10px 20px">
                                            <div class="header-logo"><a href="/"><img style="max-height:50px;" src="/public/assets/img/logo/logo-white.webp" alt="Invce"></a></div>
                                        </div>
                                        <div class="col">
                                            <p class="mb-0"><b>Institut Superieur de Techniques Appliquées - Kinshasa</b></p>
                                            <div class="header-bottom m-0">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                        <div class="header-bottom_left">
                                                            <p><b>Nom : </b><?= $f->name ?></p>
                                                            <div class="shape"></div>
                                                            <div class="shape"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="header-bottom_right">
                                                            <div class="shape"></div>
                                                            <div class="shape"></div>
                                                            <p><b>Code : </b><?= $f->key ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </header>
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <div class="booking-info mb-1">
                                            <p class="mb-0"><b>classe : </b> <?= $class->name ?></p>
                                            <p class="mb-0">A utilisé pour vérifier ses résultats en ligne...</p>
                                            <p class="mb-0"><b>Verification en ligne sur : </b>https://www.ista.ac.cd/check-resultat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="qrcode mcisme--init" data-code="https://www.ista.ac.cd/app/admin/pages/actions/student-resultat/?code=<?=$f->key?>&anacad=2022"></div>
                        </div>
                    </main>   
                    <hr /> 
                    <?php } ?>
                </div>
            </div>
            <script
                src="./assets/js/vendor/jquery-3.6.0.min.js"></script><script
                src="./assets/js/app.min.js"></script><script
                src="./assets/js/main.js"></script><script>
                    document.querySelectorAll('.qrcode').forEach(e => new QRCode(e, {
                            text: e.dataset.code,
                            width: 125,
                            height: 125,
                            colorDark : '#000',
                            colorLight : '#fff',
                            correctLevel : QRCode.CorrectLevel.H
                        })
                    );
            </script>
        <?php } else { ?>
            <h1 class='text-uppercase p-5'>
                Vous ne possédez pas les droit necessaire a la visualisation de ce document...
            </h1>
        <?php } ?>
    <?php } else { ?>
        <h1 class='text-uppercase p-5'>
            La classe sélectionnée est introuvable...
        </h1>
    <?php } ?>
</body>

</html>