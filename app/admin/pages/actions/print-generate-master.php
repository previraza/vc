<?php
require_once '../../../settings/params/connect';
die('Not Allowed');
function write_sum($sum, $devise) {
    if ($devise === 'USD') return '$' . $sum . '.00';
    if ($devise === 'FC') return $sum . '.00' . ' Fc';
} ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FACTURE ISTA KINSHASA - <?= $f->student ?></title>
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
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .invoice-table th, .invoice-table td {
            padding: 5px 20px;
        }
    </style>
</head>

<body>
    <div class="invoice-container-wrap">
        <div class="invoice-container my-0" style="background-color: #fff;">
            <?php $rqt = $db_poo->query("SELECT * FROM payments WHERE user_id = -2000 AND type = 'INSMT'") or die($db_poo->error); 
                    while($f = $rqt->fetch_object()) { ?>
                <main>
                <div class="as-invoice invoice_style2">
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
                                                    <p><b>Code : </b><?= $f->number ?></p>
                                                    <div class="shape"></div>
                                                    <div class="shape"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="header-bottom_right">
                                                    <div class="shape"></div>
                                                    <div class="shape"></div>
                                                    <p><b>Date: </b>...... / ...... / 20......</p>
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
                                    <p class="mb-0">A utilisé pour finaliser votre inscription en ligne</p>
                                    <p class="mb-0"><b>Formulaire Passerelle pour Master en ligne : </b>https://www.ista.ac.cd/inscription</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-0" style="padding-bottom:.225rem!important">
                            <div class="col-12">
                                <div class="address-box address-right py-2 px-3 mb-1">
                                    <address><b>Recu pour inscription appartenant a :</b> <address>
                                </div>
                            </div>
                        </div>
                        <table class="invoice-table mb-3">
                            <thead>
                                <tr>
                                    <th>Déscription</th>
                                    <th>Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Inscription</td>
                                    <td><?= write_sum($f->sum, $f->devise) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>    
            <?php } ?>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
