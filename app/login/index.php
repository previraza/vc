<?php require_once '../settings/params/connect' ;?>
<!doctype html>
<html lang=fr>

<head>
    <meta charset=UTF-8>
    <title>Système de numérisation de l'enseignement | Institut supérieur de techniques appliquées</title>
    <meta name=description content="ISTA-Kinshasa - Institut Supérieur de Techniques Appliquées">
    <meta name=keywords
        content="institut, technique, application, université, kinshasa, industrie, informatique, aviation, mecanique, telecommunication, electronique, electricite, maintenance materiaux medicales, preparatoire, apprentissage, technologie, universtic">
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
    <div id=preloader2 style=display:none>
        <div class=loader-content>
            Chargement en cours...
        </div>
    </div>
    <section id=ft-thx-banner class="ft-thx-banner-section position-relative d-flex align-items-center p-0"
        data-background=/layouts/default/images/portfolio/12.webp>
        <div class=background_overlay></div>
        <div class=container>
            <div class="ft-thx-banner-content position-relative">
                <div class=row>
                    <div class=col-lg-6>
                        <div class="ft-thx-banner-text headline pera-content">
                            <div class="banner-slug text-uppercase">système de numérisation de l'éducation</div>
                            <h1><a href=/#homePage>ISTA - Kinshasa</a></h1>
                            <p>Bienvenue dans le système de numérisation de l'éducation conçu par <a class=link-warning
                                    href=http://www.viraza.net target=_blank rel="noopener noreferrer">viraza</a>dans le
                                but de contribuer à l'amélioration de l'éducation nationale </p>
                            <div class="ft-thx-banner-btn d-flex">
                                <a href=#login>Se connecter</a>
                                <a href=#check>Check Resultat</a>
                                <?php /* <a href="/registration">S'inscrire</a> */ ?>
                            </div>
                        </div>
                    </div>
                    <div class=col-lg-6>
                        <div class="ft-thx-banner-courier-form forms-content">
                            <div class="forms-wrapper d-flex align-items-center overflow-hidden flex-column">
                                <form action=# id=login class=w-100>
                                    <div class="row d-none">
                                        <div class=col-md-12>
                                            <div class=wc-input>
                                                <h3 class="text-warning border p-3 rounded-1">Se connecter </h3>
                                            </div>
                                        </div>
                                        <div class=col-md-12>
                                            <h3 class="header text-light text p-4">
                                                L'application est en mode de transition annuelle, ce processus peut prendre un certain temps
                                                <br />
                                                <br />
                                                Pour plus d'informations, veuillez contacter votre administrateur.
                                                <br />
                                                <br />
                                                Nous serons ravis de vous revoir dans quelques minutes...
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="d-none- row">
                                        <div class=col-md-12>
                                            <div class=wc-input>
                                                <h3 class="text-warning border p-3 rounded-1">Se connecter </h3>
                                            </div>
                                        </div>
                                        <div class=col-md-12>
                                            <div class=wc-input><span>Nom d'utilisateur :</span>
                                                <div class="wc-text-input position-relative"><input name=login[username]
                                                        id=login_username required minlength=3
                                                        title="3 caractères minimum"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class=wc-input><span>Mot de passe :</span>
                                                <div class="wc-text-input position-relative"><input type=password
                                                        name=login[password] id=login_password required minlength=8
                                                        title="8 caractères minimum"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=loginErrorBox></div><button class="d-none- text-uppercase"
                                        type=submit>Connexion</button>
                                </form>
                                <div class=p-3></div>
                                <form action=# id=check class=w-100>
                                    <h3>Check Resultat</h3>
                                    <div class=row>
                                        <hr class="p-1 rounded-3 my-3">
                                        <div class=col-md-12>
                                            <div class=wc-input>
                                                <span>Année Académique :</span>
                                                <div class="wc-text-input position-relative">
                                                    <select name="check[anacad]" id="check_anacad">
                                                        <option selected>2022-2023</option>
                                                        <option value="2022">2021-2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=wc-input><span>Numéro d'identification :</span>
                                                <div class="wc-text-input position-relative"><input id=check_code
                                                        name=check[code] placeholder=KEY-AD8S-9J8S-ER82></div>
                                            </div><input type=hidden id=check_option name=check[option]><input
                                                type=hidden id=check_niveau name=check[niveau]><input type=hidden
                                                id=check_promotion name=check[promotion]>
                                        </div><button class=text-uppercase type=submit>Check Code</button>
                                    </div>
                                </form>
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
        $("#addStudent").on("submit", e => {
            $("#sign_fail, #sign_success").fadeOut(), $(".sign_messageries").fadeOut(), e
                .preventDefault(), $("#promotion").text();
            var t = new FormData(e.currentTarget);
            $.ajax({
                url: "./settings/add/students.php?sending_by=mcisme",
                data: t,
                type: "POST",
                contentType: !1,
                cache: !1,
                processData: !1,
                success: function(e) {
                    try {
                        var t = JSON.parse(e);
                        "succes" == t.status ? $("#sign_success").fadeIn() : "error" ==
                            t.status && $("#sign_fail").text(t.content).fadeIn()
                    } catch (t) {
                        console.error(e), $("#sign_fail").fadeIn()
                    }
                }
            })
        }), 
        $("#register").on("submit", e => {
            e.preventDefault();
            $('#preloader2').fadeIn(300);
            $.ajax({
                url: '/public/profile/setting.php?sending_by=mcisme',
                data: new FormData(e.currentTarget),
                type: "POST",
                contentType: !1,
                cache: !1,
                processData: !1,
                success: function(e) {
                    $("#modal-section").html(e).fadeIn(300);
                    $('#preloader2').fadeOut(300);$("#close-modal-profile").on("click", e => $("#modal-section").fadeOut(300).delay(500).html(null));
                }
            });
        }), $("#login").on("submit", e => {
            e.preventDefault(), $("#login-loader").fadeIn(), $("#loginErrorBox").html(), $.post(
                "../settings/get/connected.php", {
                    un: $("#login_username").val(),
                    pw: $("#login_password").val()
                }, (function(e, t, n) {
                    try {
                        var a = JSON.parse(e);
                        "succes" == a.status ? location.href = a.content : (console.log(a
                            .header, a.content), $("#loginErrorBox").html(
                            ` <div class="alert alert-danger alert-dismissible mt-3" role="alert" id="alertConnect"><small>${a.content}</small></div>`
                            ), $("#login-loader").fadeOut(300))
                    } catch (t) {
                        return $("#loginErrorBox").html(
                            ' <div class="alert alert-danger alert-dismissible mt-3" role="alert" id="alertConnect"><small>Une erreur s\'est produit pendant le traitement de votre requette.</small></div>'
                            ), $("#login-loader").fadeOut(300), console.log(e)
                    }
                }))
        }), $("#check").on("submit", e => {
            e.preventDefault();
            var m = $("#modal-section");
            $.post("/public/profile/getting.php", {
                id: $("#check_code").val(),
                opt: $("#check_option").val(),
                level: $("#check_niveau").val(),
                promo: $("#check_promotion").val(),
                anacad: $("#check_anacad").val(),
            }, (function(data) {
                m.html(data), $("#close-modal-profile").on("click", e => {
                    $("#modal-section").fadeOut(300).delay(500).html(null);
                })
            })), $("#modal-section").fadeIn(300)
        }), document.title = "Se connecter sur le SNEN de l'Institut Supérieur de Techniques Appliquées";
        $("[data-type='img']").each((i,e)=>{
            e.style.background=`url("${e.dataset.url}") no-repeat scroll center center`;
            e.style.backgroundSize=`contain`;
            e.style.width=`300px`;
            e.style.height=`300px`;
            e.style.margin=`20px`;
        });
        $('#profile').on('change',e=>{
            e.currentTarget.parentNode.style.background = `url("${URL.createObjectURL(e.currentTarget.files[0])}") no-repeat scroll center center`;
            e.currentTarget.parentNode.style.backgroundSize = `contain`;
        });
    }))
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script>
        function downloadNode(a) {
            var HTML_Width = $(a).width(),
                HTML_Height = $(a).height(),
                top_left_margin = 15,
                PDF_Width = HTML_Width + (top_left_margin * 2),
                PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2),
                canvas_image_width = HTML_Width,
                canvas_image_height = HTML_Height,
                totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

            html2canvas($(a)[0]).then(function (canvas) {
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
                for (var i = 1; i <= totalPDFPages; i++) { 
                    pdf.addPage(PDF_Width, PDF_Height);
                    pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4)+top_left_margin,canvas_image_width,canvas_image_height);
                } pdf.save(prompt('Entre le nom du fichier à télécharger','Mon Profile d\'Inscription')+".pdf");
            });
        }
    </script>
</body>

</html>