<?php require_once '../../app/settings/params/connect';?><!doctype html>
<html lang=fr>
<head>
    <meta charset=UTF-8>
    <title>Système de numérisation de l'enseignement | Institut supérieur de techniques appliquées</title>
    <meta name=description content="ISTA-Kinshasa - Institut Supérieur de Techniques Appliquées">
    <meta name=keywords content="institut, technique, application, université, kinshasa, industrie, informatique, aviation, mecanique, telecommunication, electronique, electricite, maintenance materiaux medicales, preparatoire, apprentissage, technologie, universtic">
    <meta name=author content=VIRAZA>
    <link rel="shortcut icon" href=/layouts/default/icon/favicon.webp type=image/x-icon>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel=stylesheet href=/public/assets/css/bootstrap.min.css>
    <link rel=stylesheet href=/public/assets/css/fontawesome-all.css>
    <link rel=stylesheet href=/public/assets/css/flaticon.css>
    <link rel=stylesheet href=/public/assets/css/jquery-ui.css>
    <link rel=stylesheet href=/public/assets/css/animate.css>
    <link rel=stylesheet href=/public/assets/css/nice-select.css>
    <link rel=stylesheet href=/public/assets/css/video.min.css>
    <link rel=stylesheet href=/public/assets/css/jquery.mCustomScrollbar.min.css>
    <link rel=stylesheet href=/public/assets/css/slick.css>
    <link rel=stylesheet href=/public/assets/css/rs6.css>
    <link rel=stylesheet href=/public/assets/css/slick-theme.css>
    <link rel=stylesheet href=/public/assets/css/style.css>
    <link rel=stylesheet href=/public/assets/css/mcisme.css>
    <link rel=stylesheet href=/public/assets/css/popup...mine.css>
</head>

<body class=overflow-auto>
    <div id=preloader></div>
    <section id=ft-thx-banner class="ft-thx-banner-section position-relative d-flex align-items-center p-0" data-background=/layouts/default/images/portfolio/12.webp>
        <div class=background_overlay></div>
        <div class=container>
            <div class="ft-thx-banner-content position-relative">
                <div class=row>
                    <div class=col-lg-6>
                        <div class="ft-thx-banner-text headline pera-content">
                            <div class="banner-slug text-uppercase">système de numérisation de l'éducation</div>
                            <h1><a href=/>ISTA - Kinshasa</a>
                            </h1>
                            <p>Bienvenue dans le système de numérisation de l'éducation conçu par <a class=link-warning href=http://www.viraza.net target=_blank rel="noopener noreferrer">viraza</a> dans le but de contribuer à l'amélioration de l'éducation nationale </p>
                        </div>
                    </div>
                    <div class=col-lg-6>
                        <div class="ft-thx-banner-courier-form forms-content">
                            <div class="forms-wrapper d-flex align-items-center overflow-hidden flex-column">
                                <form action=# id=check class=w-100>
                                    <h3>Check Resultat</h3>
                                    <div class=row>
                                        <hr class="p-1 rounded-3 my-3">
                                        <div class=col-md-12>
                                            <div class=wc-input> <span>Numéro d'identification :</span>
                                                <div class="wc-text-input position-relative"> <input id=check_code name=check[code] placeholder=00000000 value=<?= isset($_GET['id'])?$_GET['id']:0?>></div>
                                            </div>
                                            <input type="hidden" id="check_option" name="check[option]">
                                            <input type="hidden" id="check_niveau" name="check[niveau]">
                                            <input type="hidden" id="check_promotion" name="check[promotion]">
                                        </div> 
                                        <button class=text-uppercase id=sfcc type=submit>Check Code</button>
                                        <div class=col-md-12>
                                            <div class=wc-input> <span>Option :</span>
                                                <div class="wc-select position-relative">
                                                    <select name=check[option] id=check_option title="Selectionner une option"> 
                                                        <?php $option = ""; $rqt = mysqli_query($db, "SELECT id, name FROM options WHERE active = 1 AND `delete` = 0 ORDER BY name"); while ($row = mysqli_fetch_array($rqt)) $option.="<option value=$row[id]>$row[name]</option>"; echo $option?>
                                                    </select>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-6>
                                            <div class=wc-input> <span>Niveau :</span>
                                                <div class="wc-select position-relative"> 
                                                    <select name=check[niveau] id=check_niveau title="Selectionner une niveau">
                                                        <?php $option = ""; $rqt = mysqli_query($db, "SELECT id, name FROM level WHERE active = 1 AND `delete` = 0"); while ($row = mysqli_fetch_array($rqt)) $option.="<option value=$row[id]>$row[name]</option>"; echo $option?>
                                                    </select>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-6>
                                            <div class=wc-input> <span>Promotion :</span>
                                                <div class="wc-select position-relative"> <select name=check[promotion] id=check_promotion title="Selectionner une promotion"> <option value=2021>2021</option> <option value=2020>2020</option></select></div>
                                            </div>
                                        </div> 
                                        <button class=text-uppercase type=submit>Check Classe</button>
                                    </div> 
                                </form>
                                <div class=p-3></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="modal-section" style="display: none;"></section>
    <script src=/public/assets/js/jquery.min.js></script>
    <script src=/public/assets/js/bootstrap.min.js></script>
    <script src=/public/assets/js/popper.min.js></script>
    <script src=/public/assets/js/jquery-ui.min.js></script>
    <script src=/public/assets/js/jquery.ui.touch-punch.min.js></script>
    <script src=/public/assets/js/jquery.magnific-popup.min.js></script>
    <script src=/public/assets/js/appear.js></script>
    <script src=/public/assets/js/slick.js></script>
    <script src=/public/assets/js/jquery.counterup.min.js></script>
    <script src=/public/assets/js/waypoints.min.js></script>
    <script src=/public/assets/js/imagesloaded.pkgd.min.js></script>
    <script src=/public/assets/js/jquery.filterizr.js></script>
    <script src=/public/assets/js/jquery.mCustomScrollbar.concat.min.js></script>
    <script src=/public/assets/js/wow.min.js></script>
    <script src=/public/assets/js/jquery.cssslider.min.js></script>
    <script src=/public/assets/js/rbtools.min.js></script>
    <script src=/public/assets/js/rs6.min.js></script>
    <script src=/public/assets/js/script.js></script>
    <script src=/public/assets/js/mcisme.js></script>
    <script defer>
        $((function() {
            $("#check").on("submit", e => {
                e.preventDefault();
                var m = $('#modal-section'), t = new FormData(e.currentTarget);
                $.post("/public/profile/getting.php", {id:$('#check_code').val(), opt:$('#check_option').val(), level:$('#check_niveau').val(), promo:$('#check_promotion').val()},
                    function (data) {
                        m.html(data);
                        $('#close-modal-profile').on('click', e => {
                            $('#modal-section').fadeOut(300).delay(500).html(null);
                        })
                    },
                );
                $('#modal-section').fadeIn(300);
            }); <?= isset($_GET['id'])?"document.getElementById('sfcc').click();":NULL?>
        }))
    </script>
</body>

</html>