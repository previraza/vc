<footer id="ft-footer" class="ft-footer-section">
    <div class="container">
        <div class="ft-footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="logo-widget">
                            <div class="site-logo"><a href="#" aria-label="Accueil"><img loading="lazy"
                                        src="/public/assets/img/logo/logo2.webp" alt=""></a></div>
                            <p id="contacts"><strong>ADRESSE</strong><br>3930 Aérodrome<br>Kinshasa, Barumbu,
                                Ndolo<br>
                                <hr /><strong>Contacts</strong><br>Email: ista_kin@ista.ac.cd<br>Phone: +243 (0) 811717377
                            </p>
                            <div class="ft-btn"><a class="d-flex justify-content-center align-items-center"
                                    href="/app">APP</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="menu-widget">
                            <h3 class="widget-title">Nos Sections</h3>
                            <ul>
                                <li><a href="#mcisme">Préparatoire</a></li>
                                <li><a href="#mcisme" title="Tronc Commun de l'Ingénieur">TCI</a></li>
                                <li><a href="#mcisme">Aviation Civile</a></li>
                                <li><a href="#mcisme">Electricité</a></li>
                                <li><a href="#mcisme">Electronique</a></li>
                                <li><a href="#mcisme">Informatique</a></li>
                                <li><a href="#mcisme" title="Maintenance de matériaux Médicales">MMM</a></li>
                                <li><a href="#mcisme">Mécanique</a></li>
                                <li><a href="#mcisme">Météorologie</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="menu-widget">
                            <h3 class="widget-title">Nos liens</h3>
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li><a href="#about">À-propos</a></li>
                                <li><a href="#history">Historique</a></li>
                                <li><a href="#works">Gallerie</a></li>
                                <li><a href="#services">Nos Section</a></li>
                                <li><a href="/biblio">Notre Bibliothéque</a></li>
                                <li><a href="/articles">Articles</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="/app">App</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="gallery-widget clearfix">
                            <h3 class="widget-title">Galleries</h3>
                            <ul class="zoom-gallery">
                                <li>
                                    <a class="h-100 w-100" aria-label="Voire la gallerie" 
                                        href="/layouts/default/images/portfolio/1.webp"
                                        data-source="/layouts/default/images/portfolio/1.webp">
                                        <img loading="lazy" src="/layouts/default/images/portfolio/4.webp" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<title>Institut Supérieur de Techniques Appliquées | Kinshasa | ISTA-Kinshasa </title>
<meta name="description" content="L'Institut supérieur de techniques appliquées (ou ISTA) est une institution publique de la République démocratique du Congo située à Kinshasa dans la commune de Barumbu et née de la fusion en 1971 de trois instituts : le centre de formation Météorologique (C.F.M.) l'Institut d’Aviation Civile (I.A.C.) et l'École Nationale des Postes et Télécommunications (E.N.P.T.). Initialement appelé Institut de Météorologie, d’Aviation Civile et de Télécommunication, l'institut prendra le nom actuel en 19731." />
<script src="/public/assets/js/jquery.min.js"></script>
<script src="/public/assets/js/bootstrap.min.js"></script>
<script src="/public/assets/js/popper.min.js"></script>
<script src="/public/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/public/assets/js/appear.js"></script>
<script src="/public/assets/js/slick.js"></script>
<script src="/public/assets/js/knob.js"></script>
<script src="/public/assets/js/jquery.counterup.min.js"></script>
<script src="/layouts/default/js/owl.carousel.js"></script>
<script src="/public/assets/js/waypoints.min.js"></script>
<script src="/public/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/public/assets/js/jquery.filterizr.js"></script>
<script src="/public/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/public/assets/js/wow.min.js"></script>
<script src="/public/assets/js/jquery.cssslider.min.js"></script>
<script src="/public/assets/js/mcisme.js"></script>
<script>
$(function() {
    $('#profile').on('change', e => {
        $("#imgProfile")[0].src = URL.createObjectURL(e.target.files[0]);
        $('#send_form').fadeIn(1000);
    });
    $('#addStudent').on('submit', (e) => {
        $('#sign_fail, #sign_success').fadeOut();
        $('.sign_messageries').fadeOut();
        e.preventDefault();
        $('#promotion').text();
        var data = new FormData(e.currentTarget);
        $.ajax({
            url: "/app/settings/add/students.php?sending_by=mcisme",
            data: data,
            type: "POST",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                try {
                    var res = JSON.parse(response);
                    if (res.status == 'succes') $('#sign_success').fadeIn();
                    else if (res.status == 'error') $('#sign_fail').text(res.content)
                        .fadeIn();
                } catch (error) {
                    console.error(response);
                    $('#sign_fail').fadeIn();
                }
            }
        });
    });
    $("#lb").on("click", (e) => {
        $('#page-loader').removeClass('hidden').css({
            opacity: '.7'
        }).fadeIn();
        e.preventDefault();
        $.post("/app/settings/get/connected.php", {
            un: $('#un').val(),
            pw: $('#pw').val()
        }, function(data, textStatus, jqXHR) {
            try {
                var res = JSON.parse(data);
                if (res.status == "succes") location.href = '/';
                else if (res.status == "error") {
                    console.log(res.header, res.content);
                    $('#errorBox').html(
                        `<div class="alert alert-danger alert-dismissible mt-3" role="alert" id="alertConnect"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><strong>${res.content}</strong></div> `
                        );
                    $('#page-loader').fadeOut(300);
                } else {
                    $('#page-loader').fadeOut(300);
                    console.log(res);
                }
            } catch (error) {
                $('#page-loader').fadeOut(300);
                return console.log(data);
            }
        });
    })
});
</script>
<script src="/public/assets/js/script.js"></script>
</body>

</html>
