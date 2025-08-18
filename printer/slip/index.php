<?php 
    $code = explode('/', str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['PHP_SELF']))[1];    
    require_once '../.conf';
    $fc = $db->query(
        "SELECT
            financy_slip.id, financy_slip.ref, financy_slip.contact, financy_slip.created_at, financy_slip.code, financy_slip.number, financy_slip.transhis, financy_fee.value, financy_fee.value AS full_value, financy_fee.transh, financy_fee.devise,
            users_financy.fullname                      AS agent,
            financy_slip.client_name                    AS name,
            CONCAT(std1.firstname, ' ', std1.lastname)  AS name1,
            CONCAT(std2.firstname, ' ', std2.lastname)  AS name2,
            financy_slip.contact                        AS phone,
            std1.phone                                  AS phone1,
            std2.phone                                  AS phone2,
            std1.gender                                 AS gender1,
            std2.gender                                 AS gender2,
            s1.name                                     AS sec1,
            s2.name                                     AS sec2,
            o1.name                                     AS opt1,
            o2.name                                     AS opt2,
            l1.name                                     AS lev1,
            l2.name                                     AS lev2,
            c1.name                                     AS cla1,
            c2.name                                     AS cla2,
            DATE(financy_slip.created_at)               AS today, 
            MONTH(financy_slip.created_at)              AS month, 
            financy_fee.name                            AS fee,
            financy_fee.code                            AS fee_code
        FROM financy_slip 
            JOIN      financy_fee                       ON financy_fee.id=financy_slip.fee
            JOIN      users_financy                     ON users_financy.id=financy_slip.created_by
            LEFT JOIN snem.students         AS std1     ON std1.id=financy_slip.student 
            LEFT JOIN snem.students         AS std2     ON std2.id=financy_slip.student
            LEFT JOIN snem.classes          AS c1       ON c1.id=std1.class 
            LEFT JOIN snem.classes          AS c2       ON c2.id=std2.class
            LEFT JOIN snem.sections         AS s1       ON s1.id=c1.section
            LEFT JOIN snem.sections         AS s2       ON s2.id=c2.section
            LEFT JOIN snem.options          AS o1       ON o1.id=c1.option
            LEFT JOIN snem.options          AS o2       ON o2.id=c2.option
            LEFT JOIN snem.level            AS l1       ON l1.id=c1.level
            LEFT JOIN snem.level            AS l2       ON l2.id=c2.level
        WHERE financy_slip.id = $code AND financy_slip.deleted_at IS NULL ORDER BY id") or die($db->error);
        $db->query("UPDATE financy_slip SET printed = true WHERE financy_slip.id = $code;");
    $fac = $fc->fetch_object();
    if (!empty($fac)){ $f = $fac;
        function write_sum($sum, $devise){
            if ($devise === 'USD') return '$'.$sum.'.00';
            else if ($devise === 'CFD') return $sum.'.00'.' Fc';
            else return $sum.'.00'.' ?';
        }
        
        if($f->transh){
            $f->sums = [];
            $sum_transh = explode('|', $f->transh);
            if($f->transhis == 'first' || $f->transhis == 'full')
                $f->sums['Premiere'] = $sum_transh[0];
            if($f->transhis == 'second' || $f->transhis == 'full')
                $f->sums['Deuxieme'] = $sum_transh[1];
        }

        function getTruth(...$values){
            foreach ($values as $value) if($value && $value != '') return $value ;
            return NULL;
        }

        if($f->fee_code == "INS-RE-OR") unset(
            $f->name1,
            $f->phone1,
            $f->gender1,
            $f->sec1,
            $f->opt1,
            $f->lev1,
            $f->cla1
        ); else unset(
            $f->name2,
            $f->phone2,
            $f->gender2,
            $f->sec2,
            $f->opt2,
            $f->lev2,
            $f->cla2
        );
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FACTURE ISTA KINSHASA BARUMBU - <?=getTruth($f->name??false,$f->name1??false,$f->name2??false,'........................................')?></title>
    <meta name="author" content="Angfuzsoft">
    <meta name="description" content="Invce - Invoice HTML Template">
    <meta name="keywords" content="Invce - Invoice HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/public/printer/assets/imgs/cropped-fav-180x180.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/printer/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/printer/assets/css/app.min.css">
    <link rel="stylesheet" href="/printer/assets/css/style.css">
    <link rel="stylesheet" href="/printer/assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>
    <style type="text/css" media="print">

    </style>
</head>

<body>
    <div class="invoice-container-wrap">
        <div class="invoice-container">
            <main>
                <div class="as-invoice invoice_style2">
                    <div class="download-inner" id="download_section">
                        <header class="as-header header-layout1">
                            <div class="row align-items-center justify-content-between">
                                <hr>
                                <div class="col-auto m-0 p-0">
                                    <div class="header-logo">
                                        <a href="/">
                                            <img style="max-height:100px;" src="/assets/images/ista.jpg" alt="Invce">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto m-0 p-0">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <div class="booking-info">
                                                <p><b>Institut Supérieur des Techniques Appliquées (ISTA / Kinshasa)
                                                    </b></p>
                                                <p><b>Type de Paiement :
                                                    </b><?= $f->fee ?>
                                                </p>
                                                <p><b>Numéro de Bordereaux
                                                    NO : </b>#<?= $f->number?>
                                                </p>
                                                <p><b>Numéro de paiement
                                                    NO : </b><?= $f->code?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto m-0 p-0">
                                    <div class="header-logo">
                                        <a href="/">
                                            <div id="qrcode"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-bottom mt-0">
                                <div class="row
                                        align-items-center
                                        justify-content-between">
                                    <div class="col-auto">
                                        <div class="header-bottom_left">
                                            <p><b>Nom de l'agent : </b><?= $f->agent?></p>
                                            <div class="shape"></div>
                                            <div class="shape"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="header-bottom_right">
                                            <div class="shape"></div>
                                            <div class="shape"></div>
                                            <p><b>Date:
                                                </b><?= $f->created_at?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="row gx-0">
                            <div class="col-6">
                                <div class="address-box address-left">
                                    <b>Vos Informations</b></br>
                                    <address>
                                        Nom complet : <?=getTruth($f->name??false,$f->name1??false,$f->name2??false,'................................................')?><br>
                                        Téléphone : <?=getTruth($f->phone??false,$f->phone1??false,$f->phone2??false,'.....................................................')?><br>
                                        Sexe : <?= ["-"=>"..............................................................","A"=>"Autre","F"=>"Féminin","M"=>"Masculin"][getTruth($f->gender1??false,$f->gender2??false,'-')]?><br>
                                    </address>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="address-box address-right">
                                        <b>Details Agences:</b>
                                    <address>Vira-Bank<br>Guichet No. 1<br>Kinshasa-Barumbu,
                                        R.D.Congo.</address>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-0">
                            <div class="col-6">
                                <div class="address-box address-left">
                                    <b>Section : </b>
                                    <?=getTruth($f->sec1??false,$f->sec2??false,'..........................................................')?><br>
                                    <b>Option : </b>
                                    <?=getTruth($f->opt1??false,$f->opt2??false,'............................................................')?><br>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="address-box address-right">
                                    <b>Promotion : </b>
                                    <?=getTruth($f->lev1??false,$f->lev2??false,'.......................................................')?><br>
                                    <b>Classe : </b>
                                    <?=getTruth($f->cla1??false,$f->cla2??false,'.............................................................')?><br>
                                </div>
                            </div>
                        </div>
                        <table class="invoice-table">
                            <thead>
                                <tr>
                                    <th>Déscription</th>
                                    <th>Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($f->sums??false) { 
                                    $f->value = 0;
                                    foreach ($f->sums as $state => $value) {
                                        $f->value += $value;
                                        ?>
                                    <tr>
                                        <td><?= $f->fee ?> | <?=$state?> Tranche</td>
                                        <td><?=write_sum($value,$f->devise)?></td>
                                    </tr>
                                <?php } } else {?> 
                                    <tr>
                                        <td><?= $f->fee ?></td>
                                        <td><?=write_sum($f->value,$f->devise)?></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <div class="invoice-left"><b>Veuillez noter :</b>
                                    <p class="mb-0">Le montant payé ne peut etre ni repris, ni transférer à un tiers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <table class="total-table">
                                    <tr>
                                        <th>Sous Total :</th>
                                        <td><?=write_sum($f->value,$f->devise)?></td>
                                    </tr>
                                    <tr>
                                        <th>Reste :</th>
                                        <td class=text-danger><?=write_sum($f->full_value-$f->value, $f->devise)?></td>
                                    </tr>
                                    <tr>
                                        <th>Total :</th>
                                        <td><?=write_sum($f->value,$f->devise)?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <div class="invoice-left mt-2"><b>Signature de l'agent</b>
                                    <p class="mt-1 text-center">....................................</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="invoice-rigth mt-2">
                                <!-- <b>Sceaux d'établissement</b>
                                <p class="mt-1 text-center">.........................................</p> -->
                                <img src="_.png" class='casher' style='opacity: 0.8;position: absolute;margin-top : -60px ;margin-left : -160px;' alt="cashier"> 
                                </div>
                            </div>
                        </div>
                        
                        <p class="company-address mb-2"><b>Adresse:</b><br>3930, Av. Aerodrome, Q. Ndolo,
                            Kinshasa-Barumbu, République Démocratique du Congo</p>
                        <!-- <p class="invoice-note mt-3 text-center"><svg width="13" height="16" viewBox="0 0 13 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.22969
                                        12.6H9.77031V11.4H3.22969V12.6ZM3.22969
                                        9.2H9.77031V8H3.22969V9.2ZM1.21875
                                        16C0.89375 16 0.609375 15.88 0.365625
                                        15.64C0.121875 15.4 0 15.12 0 14.8V1.2C0
                                        0.88 0.121875 0.6 0.365625 0.36C0.609375
                                        0.12 0.89375 0 1.21875 0H8.55156L13
                                        4.38V14.8C13 15.12 12.8781 15.4 12.6344
                                        15.64C12.3906 15.88 12.1063 16 11.7812
                                        16H1.21875ZM7.94219
                                        4.92V1.2H1.21875V14.8H11.7812V4.92H7.94219ZM1.21875
                                        1.2V4.92V1.2V14.8V1.2Z" fill="#1CB9C8" />
                            </svg>
                            <b>NOTE: </b>Ce document doit comporter la signature et le sceau de l'administrateur du budget pour etre validé.
                        </p> -->
                    </div>
                    <div class="invoice-buttons">
                        <button class="print_btn"><svg width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9688 8.46875C12.1146 8.32292
                                            12.2917 8.25 12.5 8.25C12.7083 8.25
                                            12.8854 8.32292 13.0312
                                            8.46875C13.1771 8.61458 13.25
                                            8.79167 13.25 9C13.25 9.20833
                                            13.1771 9.38542 13.0312
                                            9.53125C12.8854 9.67708 12.7083 9.75
                                            12.5 9.75C12.2917 9.75 12.1146
                                            9.67708 11.9688 9.53125C11.8229
                                            9.38542 11.75 9.20833 11.75 9C11.75
                                            8.79167 11.8229 8.61458 11.9688
                                            8.46875ZM13.5 5.5C14.1875 5.5
                                            14.7708 5.75 15.25 6.25C15.75
                                            6.72917 16 7.3125 16 8V12C16 12.1458
                                            15.9479 12.2708 15.8438
                                            12.375C15.7604 12.4583 15.6458 12.5
                                            15.5 12.5H13.5V15.5C13.5 15.6458
                                            13.4479 15.7604 13.3438
                                            15.8438C13.2604 15.9479 13.1458 16
                                            13 16H3C2.85417 16 2.72917 15.9479
                                            2.625 15.8438C2.54167 15.7604 2.5
                                            15.6458 2.5 15.5V12.5H0.5C0.354167
                                            12.5 0.229167 12.4583 0.125
                                            12.375C0.0416667 12.2708 0 12.1458 0
                                            12V8C0 7.3125 0.239583 6.72917
                                            0.71875 6.25C1.21875 5.75 1.8125 5.5
                                            2.5 5.5V1C2.5 0.729167 2.59375 0.5
                                            2.78125 0.3125C2.96875 0.104167
                                            3.1875 0 3.4375 0H10.375C10.7917 0
                                            11.1458 0.145833 11.4375
                                            0.4375L13.0625 2.0625C13.3542
                                            2.35417 13.5 2.70833 13.5
                                            3.125V5.5ZM4
                                            1.5V5.5H12V3.5H10.5C10.3542 3.5
                                            10.2292 3.45833 10.125 3.375C10.0417
                                            3.27083 10 3.14583 10 3V1.5H4ZM12
                                            14.5V12.5H4V14.5H12ZM14.5 11V8C14.5
                                            7.72917 14.3958 7.5 14.1875
                                            7.3125C14 7.10417 13.7708 7 13.5
                                            7H2.5C2.22917 7 1.98958 7.10417
                                            1.78125 7.3125C1.59375 7.5 1.5
                                            7.72917 1.5 8V11H14.5Z" fill="white" />
                            </svg> <span>imprimer</span></button>
                            </button>
                     <button id="share_btn" class="bg-warning">
                        <svg
                           width="18" height="16" viewBox="0 0 18 16" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M16.5 9C16.9167 9 17.2708 9.14583 17.5625 9.4375C17.8542 9.72917 18 10.0833 18 10.5V14.5C18 14.9167 17.8542 15.2708 17.5625 15.5625C17.2708 15.8542 16.9167 16 16.5 16H1.5C1.08333 16 0.729167 15.8542 0.4375 15.5625C0.145833 15.2708 0 14.9167 0 14.5V10.5C0 10.0833 0.145833 9.72917 0.4375 9.4375C0.729167 9.14583 1.08333 9 1.5 9H4.375L2.9375 7.5625C2.47917 7.08333 2.375 6.54167 2.625 5.9375C2.875 5.3125 3.33333 5 4 5H6V1.5C6 1.08333 6.14583 0.729167 6.4375 0.4375C6.72917 0.145833 7.08333 0 7.5 0H10.5C10.9167 0 11.2708 0.145833 11.5625 0.4375C11.8542 0.729167 12 1.08333 12 1.5V5H14C14.6667 5 15.125 5.3125 15.375 5.9375C15.6458 6.54167 15.5417 7.08333 15.0625 7.5625L13.625 9H16.5ZM4 6.5L9 11.5L14 6.5H10.5V1.5H7.5V6.5H4ZM16.5 14.5V10.5H12.125L10.0625 12.5625C9.77083 12.8542 9.41667 13 9 13C8.58333 13 8.22917 12.8542 7.9375 12.5625L5.875 10.5H1.5V14.5H16.5ZM13.9688 13.0312C13.8229 12.8854 13.75 12.7083 13.75 12.5C13.75 12.2917 13.8229 12.1146 13.9688 11.9688C14.1146 11.8229 14.2917 11.75 14.5 11.75C14.7083 11.75 14.8854 11.8229 15.0312 11.9688C15.1771 12.1146 15.25 12.2917 15.25 12.5C15.25 12.7083 15.1771 12.8854 15.0312 13.0312C14.8854 13.1771 14.7083 13.25 14.5 13.25C14.2917 13.25 14.1146 13.1771 13.9688 13.0312Z"
                              fill="white" />
                        </svg>
                        <span>Partager</span>
                     </button>
                        <button id="download_btn" class="download_btn"><svg width="18" height="16" viewBox="0 0 18 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 9C16.9167 9 17.2708
                                                9.14583 17.5625 9.4375C17.8542
                                                9.72917 18 10.0833 18
                                                10.5V14.5C18 14.9167 17.8542
                                                15.2708 17.5625 15.5625C17.2708
                                                15.8542 16.9167 16 16.5
                                                16H1.5C1.08333 16 0.729167
                                                15.8542 0.4375 15.5625C0.145833
                                                15.2708 0 14.9167 0 14.5V10.5C0
                                                10.0833 0.145833 9.72917 0.4375
                                                9.4375C0.729167 9.14583 1.08333
                                                9 1.5 9H4.375L2.9375
                                                7.5625C2.47917 7.08333 2.375
                                                6.54167 2.625 5.9375C2.875
                                                5.3125 3.33333 5 4 5H6V1.5C6
                                                1.08333 6.14583 0.729167 6.4375
                                                0.4375C6.72917 0.145833 7.08333
                                                0 7.5 0H10.5C10.9167 0 11.2708
                                                0.145833 11.5625 0.4375C11.8542
                                                0.729167 12 1.08333 12
                                                1.5V5H14C14.6667 5 15.125 5.3125
                                                15.375 5.9375C15.6458 6.54167
                                                15.5417 7.08333 15.0625
                                                7.5625L13.625 9H16.5ZM4 6.5L9
                                                11.5L14
                                                6.5H10.5V1.5H7.5V6.5H4ZM16.5
                                                14.5V10.5H12.125L10.0625
                                                12.5625C9.77083 12.8542 9.41667
                                                13 9 13C8.58333 13 8.22917
                                                12.8542 7.9375 12.5625L5.875
                                                10.5H1.5V14.5H16.5ZM13.9688
                                                13.0312C13.8229 12.8854 13.75
                                                12.7083 13.75 12.5C13.75 12.2917
                                                13.8229 12.1146 13.9688
                                                11.9688C14.1146 11.8229 14.2917
                                                11.75 14.5 11.75C14.7083 11.75
                                                14.8854 11.8229 15.0312
                                                11.9688C15.1771 12.1146 15.25
                                                12.2917 15.25 12.5C15.25 12.7083
                                                15.1771 12.8854 15.0312
                                                13.0312C14.8854 13.1771 14.7083
                                                13.25 14.5 13.25C14.2917 13.25
                                                14.1146 13.1771 13.9688
                                                13.0312Z" fill="white" />
                            </svg><span>Télécharger</span></button>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="/printer/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/printer/assets/js/app.min.js"></script>
    <script src="/printer/assets/js/main.js"></script>
    <script>
    const qrcode = new QRCode(document.getElementById('qrcode'), {
        text: location.href + '?Y=2022',
        width: 100,
        height: 100,
        colorDark: '#000',
        colorLight: '#fff',
        correctLevel: QRCode.CorrectLevel.H
    });
    </script>
</body>

</html>
<?php }