<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#222222" />
    <meta name="background-color" content="#f7c243" />
    <meta name="keywords" content="institut, technique, application, université, kinshasa, industrie, informatique, aviation, mecanique, telecommunication, electronique, electricite, maintenance materiaux medicales, preparatoire, apprentissage, technologie, universtic">
    <meta name="author" content="VIRAZA">
    <!-- <meta name="description" content="">&&<title></title> IN THE FOOTER -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/layouts/default/icon/favicon.webp" type="image/x-icon">
    <link rel="apple-touch-icon" href="/layouts/default/icon/favicon.webp" type="image/x-icon">
    <link rel="image_src" href="/layouts/default/images/portfolio/12.webp"> 
    <link rel="search" type="application/opensearchdescription+xml" title="Snen Viraza" href="services/ista.xml">
    <link rel="canonical" href="https://viraza.net"/>

    <meta property="og:type" content= "website" />
    <meta property="og:url" content="https://www.ista.ac.cd"/>
    <meta property="og:site_name" content="Institut Supérieur de Techniques Appliquées | ISTA-Kinshasa" />
    <meta property="og:image" itemprop="image primaryImageOfPage" content="/layouts/default/icon/favicon.webp" />
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:domain" content="www.ista.ac.cd"/>
    <meta name="twitter:title" property="og:title" itemprop="name" content="Site officiel de l'Institut Supérieur de Techniques Appliquées (ISTA en sigle)" />
    <meta name="twitter:description" property="og:description" itemprop="description" content="L'Institut supérieur de techniques appliquées (ou ISTA) est une institution publique de la République démocratique du Congo située à Kinshasa dans la commune de Barumbu et née de la fusion en 1971 de trois instituts : le centre de formation Météorologique (C.F.M.) l'Institut d’Aviation Civile (I.A.C.) et l'École Nationale des Postes et Télécommunications (E.N.P.T.). Initialement appelé Institut de Météorologie, d’Aviation Civile et de Télécommunication, l'institut prendra le nom actuel en 19731." />
    
    <link href="/layouts/default/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/layouts/default/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="/layouts/default/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="/public/assets/css/flaticon.css">
    <link rel="stylesheet" href="/public/assets/css/animate.css">
    <link rel="stylesheet" href="/public/assets/css/nice-select.css">
    <link rel="stylesheet" href="/public/assets/css/video.min.css">
    <link rel="stylesheet" href="/public/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/public/assets/css/slick.css">
    <link rel="stylesheet" href="/public/assets/css/rs6.css">
    <link rel="stylesheet" href="/public/assets/css/slick-theme.css">
    <link rel="stylesheet" href="/public/assets/css/docs.css">
    <link href="/layouts/default/css/started.css" rel="stylesheet" type="text/css" />
    <link href="/layouts/default/css/coloring.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/layouts/default/css/mcisme.css">
    <link rel="stylesheet" href="/public/assets/css/mcisme.css">
    <link rel="manifest" href="/services/ista.json">
    <script src="/services/ista.js"></script>
</head>

<body>
    <div id="preloader"></div>
    <div class="up"><a href="#" class="scrollup text-center" aria-label="Back to Up"><i
                class="fas fa-chevron-up"></i></a></div>
    <header id="ft-header" class="ft-header-section header-style-one">
        <div class="ft-header-content-wrapper position-relative">
            <div class="ft-brand-logo"><a href="/#" aria-label="logo viraza"><img loading="lazy"
                        src="/public/assets/img/logo/logo-white.webp" alt="logo viraza"></a></div>
            <div class="container">
                <div class="ft-header-content position-relative p-0">
                    <div class="ft-header-menu-top-cta position-relative">
                        <div class="ft-header-top ul-li">
                            <ul>
                                <li><i class="fal fa-envelope"></i><a
                                        href="mailto:ista_kin@ista.ac.cd">ista_kin@ista.ac.cd</a></li>
                                <li><i class="fal fa-map-marker-alt"></i>3930 Aérodrome, Ndolo, Kinshasa-Barumbu,
                                    Congo-Kinshasa</li>
                            </ul>
                        </div>
                        <div class="ft-header-main-menu d-flex justify-content-end align-items-center">
                            <nav class="ft-main-navigation clearfix ul-li">
                                <ul id="ft-main-nav" class="nav navbar-nav clearfix">
                                    <li><a href="\" spiceLink>Accueil</a></li>
                                    <li class="dropdown"><a href="##%##">Qui sommes-nous ?</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="#about" spiceLink>A-propos</a></li>
                                            <li><a href="#history" spiceLink>Historique</a></li>
                                            <li><a href="#works" spiceLink>Gallerie</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="##%##">Services</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="#services" spiceLink>Nos Sections </a></li>
                                            <li><a href="\biblio">Notre Bibliothéque</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="\articles" spiceLink>Articles</a></li>
                                    <li><a href="\?page=publications" spiceLink>Publications</a></li>
                                    <li><a href="#contact" spiceLink>Contact</a></li>
                                    <?=isset($_SESSION['ADMIN']) && $_SESSION['ADMIN']?'<li class=dropdown><a href=##%##>[Admin]</a><ul class="dropdown-menu clearfix"><li><a href=/admin spicelink>Publier un article</a></li><li><a href=/admin/teacher>Publier un enseignant</a></li> </ul> </li>':null?>
                                </ul>
                            </nav>
                            <div class="ft-header-cta-btn"><a
                                    class="d-flex justify-content-center align-items-center w-auto px-3"
                                    href="/app">APP</a></div>
                        </div>
                    </div>
                    <div class="mobile_menu position-relative">
                        <div class="mobile_menu_button open_mobile_menu"><i class="fa-2x fal fa-bars"></i></div>
                        <div class="mobile_menu_wrap">
                            <div class="mobile_menu_overlay open_mobile_menu"></div>
                            <div class="mobile_menu_content">
                                <div class="mobile_menu_close open_mobile_menu"><i class="fal fa-times"></i></div>
                                <div class="m-brand-logo"><a href="%21.html#" aria-label="Accueil"><img loading="lazy"
                                            src="/public/assets/img/logo/logo4.webp" alt=""></a></div>
                                <nav class="mobile-main-navigation clearfix ul-li">
                                    <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                        <li><a href="\" spiceLink>Accueil</a></li>
                                        <li class="dropdown"><a href="##%##">Qui sommes-nous ?</a>
                                            <ul class="dropdown-menu clearfix">
                                                <li><a href="#about" spiceLink>A-propos</a></li>
                                                <li><a href="#history" spiceLink>Historique</a></li>
                                                <li><a href="#works" spiceLink>Gallerie</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="##%##">Services</a>
                                            <ul class="dropdown-menu clearfix">
                                                <li><a href="#services" spiceLink>Nos Sections </a></li>
                                                <li><a href="\biblio">Notre Bibliothéque</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="\articles" spiceLink>Articles</a></li>
                                        <li><a href="\?page=publications" spiceLink>Publications</a></li>
                                        <li><a href="#contact" spiceLink>Contact</a></li>
                                        <?=isset($_SESSION['ADMIN']) && $_SESSION['ADMIN']?'<li class=dropdown><a href=##%##>[Admin]</a><ul class="dropdown-menu clearfix"><li><a href=/admin spicelink>Publier un article</a></li><li><a href=/admin/teacher>Publier un enseignant</a></li> </ul> </li>':null?>
                                    </ul>
                                </nav>
                                <div class="ft-header-cta-btn mt-5 w-100 m-0 border-top border-bottom"><a
                                        class="d-flex justify-content-center align-items-center w-auto px-3"
                                        href="/app">APP</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-header-cta-info d-flex end-0">
                <div class="ft-header-cta-icon d-flex justify-content-center align-items-center"><i
                        class="flaticon-call"></i></div>
                <div class="ft-header-cta-text headline pera-content">
                    <p>Contacter</p>
                    <h3>+243 811 717 377</h3>
                </div>
            </div>
        </div>
    </header>
    <div class="no-bottom no-top position-absolute" id="content" style="display:none;">
        <div id="top"><a id="closeSpice" href="#_mcisme_" spiceLink aria-label="Fermer le Spice"></a></div>
        <section id="about" class="vertical-center dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="title">À-propos de <span class="id-color">Nous</span></h2>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-lg-6">
                        <blockquote class="s1 c1"><span class="b-text">Institut Supérieur des Techniques Appliquées
                                (I.S.T.A.)</span><span class="b-arrow"></span></blockquote>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-justify">L'Institut supérieur de techniques appliquées (ou ISTA) est une
                            institution publique de la République démocratique du Congo située à Kinshasa dans la
                            commune de Barumbu et née de la fusion en 1971 de trois instituts : le centre de formation
                            Météorologique (C.F.M.) l'Institut d’Aviation Civile (I.A.C.) et l'École Nationale des
                            Postes et Télécommunications (E.N.P.T.). Initialement appelé Institut de Météorologie,
                            d’Aviation Civile et de Télécommunication, l'institut prendra le nom actuel en 19731.</p>
                    </div>
                    <div class="col-md-12 mb30"><img loading="lazy" class="img-fluid"
                            src="/layouts/default/images/misc/1.webp" alt="" /></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp">
                        <blockquote class="s1 c1"><span class="b-text">Type d’enseignements dispensés</span><span
                                class="b-arrow"></span></blockquote>
                        <p class="text-justify">L’ISTA dispense des enseignements en deux cycles, le 1° cycle une
                            formation de 4 ans dont une année de préparatoire et les 3 années de graduat. </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <h3>Le premier cycle comprend : </h3>
                        <p class="text-justify">
                        <ul>
                            <li>Section aviation civile avec les options d’exploitation aéronautique et radionavigation
                                ;</li>
                            <li>Section électricité avec l’option électricité industrielle ;</li>
                            <li>Section électronique a des orientations en 3ème années soit Industrielle, commutation,
                                en radio transmission ou et radiotélévision. ;</li>
                            <li>Section mécanique générale avec l’option électro – mécanique ;</li>
                            <li>Section météorologie avec les options prévision météorologique, la protection des
                                instruments, l’agro météo et l’hydro – météo ;</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <h3>Le second cycle comprend : </h3>
                        <p class="text-justify">
                        <ul>
                            <li>Section électricité avec : le génie électrotechnique</li>
                            <li>Section électronique avec : le génie informatique, le génie électronique et le génie
                                télécommunication</li>
                            <li>Section mécanique avec : le génie mécanique appliquée (1ère), le génie mécanique de
                                production (2ème), et le génie mécanique énergétique (3ème) ;</li>
                            <li>Section aviation avec le génie exploitation aéronautique, transport aérien ;</li>
                            <li>Section météo avec le génie météo (en environnement) hydrologie et agrométeologie.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp">
                    <blockquote class="s1 c1"><span class="b-text">Organisation Administrative</span><span
                            class="b-arrow"></span></blockquote>
                    <p class="text-justify">L’institut Supérieur de Techniques Appliquées compte 5 organes de décision
                        et de consultation qui sont :</p>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-lg-6 wow fadeInUp">
                        <h3>Le conseil de l’Institut</h3>
                        <p class="text-justify">Ce dernier est un organe de conception et de prise de décisions pour un
                            bon fonctionnement de l'Etablissement</p>
                        <h3>Le comité de gestion</h3>
                        <p class="text-justify">c’est un organe d’exécution des instructions de la hiérarchie, qui
                            assure la gestion quotidienne de l’établissement. Il comprend 5 membres :</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <ul>
                            <li>Le Directeur Général : <strong>P. Kahuli Bititi</strong>;</li>
                            <li>Le Secrétaire Général Académique : <strong>PA. Ilunga Mbuyamba Elisée</strong>;</li>
                            <li>Le Secrétaire Général Académique Chargé de Recharche : <strong>P. Nkangu
                                    Lundala</strong>;</li>
                            <li>Le Secrétaire Général Administratif : <strong>CT. Kalala Kankonde W</strong>;</li>
                            <li>L’administrateur de budget : <strong>CT. Kambale Nzole</strong>;</li>
                        </ul>
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row wow fadeInUp justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-30 pb-3">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap"></div>
                                </div>
                                <div class="fpw-overlay-btm d-flex justify-content-center align-items-center">
                                    <div class="fpwow-icons"><a aria-label="social" href="#"><i
                                                class="fa fa-facebook fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-twitter fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-linkedin fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-pinterest fa-lg"></i></a></div>
                                </div><img loading="lazy" src="/layouts/default/images/team/01 1000x1000.webp"
                                    class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Kahuli Bititi</h4><span>Professeur</span>
                            <div>Directeur Général</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-30 pb-3">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap"></div>
                                </div>
                                <div class="fpw-overlay-btm d-flex justify-content-center align-items-center">
                                    <div class="fpwow-icons"><a aria-label="social" href="#"><i
                                                class="fa fa-facebook fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-twitter fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-linkedin fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-pinterest fa-lg"></i></a></div>
                                    <p class="text-justify mx-2">Docteur Ingénieur en Génie Electrique, expert en
                                        Systèmes Artificiels Intelligents à l'Université de Guanajuato du Mexique. </p>
                                </div><img loading="lazy" src="/layouts/default/images/team/02 1000x1000.webp"
                                    class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Ilunga Mbuyamba Elisée</h4><span>Professeur Associé</span>
                            <div>Secrétaire Général Académique</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-30 pb-3">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap"></div>
                                </div>
                                <div class="fpw-overlay-btm d-flex justify-content-center align-items-center">
                                    <div class="fpwow-icons"><a aria-label="social" href="#"><i
                                                class="fa fa-facebook fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-twitter fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-linkedin fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-pinterest fa-lg"></i></a></div>
                                </div><img loading="lazy" src="/layouts/default/images/team/03 1000x1000.webp"
                                    class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Nkangu Lundala</h4><span>Professeur</span>
                            <div>Secrétaire Général Académique Chargé de Recherche</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-30 pb-3">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap"></div>
                                </div>
                                <div class="fpw-overlay-btm d-flex justify-content-center align-items-center">
                                    <div class="fpwow-icons"><a aria-label="social" href="#"><i
                                                class="fa fa-facebook fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-twitter fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-linkedin fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-pinterest fa-lg"></i></a></div>
                                </div><img loading="lazy" src="/layouts/default/images/team/04 1000x1000.webp"
                                    class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Kalala Kankonde</h4><span>Chef de Traveaux</span>
                            <div>Secrétaire Général Administratif</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-30 pb-3">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap"></div>
                                </div>
                                <div class="fpw-overlay-btm d-flex justify-content-center align-items-center">
                                    <div class="fpwow-icons"><a aria-label="social" href="#"><i
                                                class="fa fa-facebook fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-twitter fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-linkedin fa-lg"></i></a><a aria-label="social" href="#"><i
                                                class="fa fa-pinterest fa-lg"></i></a></div>
                                </div><img loading="lazy" src="/layouts/default/images/team/05 1000x1000.webp"
                                    class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Kambale Nzole</h4><span>Chef de Traveaux</span>
                            <div>Administrateur de Budget</div>
                        </div>
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row wow fadeInUp">
                    <div class="col-md-12 text-center">
                        <h3>Nos partenaires</h3>
                    </div>
                    <div class="col-md-12">
                        <div id="testimonial-carousel" class="owl-carousel owl-theme">
                            <blockquote class="testimonial-big">Cisco Academy est un programme mondiale d'éducation dans
                                le domaine de l'IT et de la cybersécurité qui s'associe avec des établissements
                                d'enseignement du monde entier pour permettre à tous de saisir des opportunités
                                professionnelles. C'est le plus vaste et le plus ancien programme de responsabilité
                                sociétale de l'entreprise Cisco. <h3><a href="netacad.com"
                                        class="name border-top border-bottom">Cisco Academy</a></h3>
                            </blockquote>
                            <blockquote class="testimonial-big">Depuis 2007, UniversiTIC se positionne au-delà du simple
                                financement de matériel informatique et œuvre à la construction d’un outil de
                                développement durable qui vient en soutien aux institutions partenaires dans leur
                                globalité, en formant chaque métier universitaire (bibliothèque, administration,
                                enseignement, communication, recherche,…) à l’utilisation des TIC <h3><a
                                        href="https:/universitic.wordpress.com/"
                                        class="name border-top border-bottom">UniversTIC</a></h3>
                            </blockquote>
                            <blockquote class="testimonial-big">Centre de recherche à caractère scientifique et
                                technologique crée en 2013 au sein de l'Institut Supérieur de Techniques Appliquées
                                (ISTA) de Kinshasa. LE CERERK est un centre de recherche à vocation régionale dont la
                                mission principale consiste à effectuer des études et des recherches fondamentales et
                                appliquées sur les énergies renouvelables. <h3><a class="name border-top border-bottom"
                                        href="#">CERERK</a></h3>
                            </blockquote>
                            <blockquote class="testimonial-big">Le programme nationale de recherche scientifique et
                                technologique PNRST en sigle, est une structure d'intérêt public ayant pour mission
                                officielle d'encadrer, promouvoir, organiser et coordonener toutes les activités
                                relatives à la recherche spatiale et innovation technologique en République Démocratique
                                du Congo. <h3><a class="name border-top border-bottom" href="#">PNRST</a></h3>
                            </blockquote>
                            <blockquote class="testimonial-big">
                                <h3><a class="name border-top border-bottom" href="#">Trinity-3</a></h3>
                            </blockquote>
                            <blockquote class="testimonial-big">Viraza est une suite des valeurs sur dans le monde de la
                                conception des systèmes des gestions administrative grace à son experience acquis dans
                                le domaine de l'enseignement numérique sous son anciènne plateforme <span
                                    class="text-info d-inline">Pronic</span>et des partenariat avec des instutitions
                                rénomés. <h3><a href="http:/viraza.net" class="name border-top border-bottom">Viraza</a>
                                </h3>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="col-lg-12 wow fadeInUp">
                    <blockquote class="s1 c1"><span class="b-text">Le conseil de partenaires (COPA)</span><span
                            class="b-arrow"></span></blockquote>
                    <p class="text-justify">C’est un organe qui s’occupe de la gestion des frais d’études. Les
                        principaux acteurs sont le comité de gestion, les représentants du corps académiques,
                        scientifique et administratif et le comité d’encadrement des étudiants, Présidé actuellement Par
                        l'Ingénieur <strong>Jiress KALONJI YOMBO</strong></p>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-lg-6 wow fadeInUp">
                        <h3>Le conseil des sections</h3>
                        <p class="text-justify">Chaque bureau de section comprend les 5 membres suivants :
                        <ul>
                            <li>Un chef de section (doyen) ;</li>
                            <li>Deux chefs de section Adjoints chargés de l’enseignement (dont un pour le premier cycle
                                et un autre pour le second cycle) ;</li>
                            <li>Un chef de section adjoint chargé de la recherche ;</li>
                            <li>Un secrétaire académique;</li>
                            <li>La direction des unités de productions ;</li>
                            <li>La direction des œuvres estudiantines ;</li>
                            <li>La direction des audits internes;</li>
                            <li>La direction de section ;</li>
                            <li>La direction de para – académique ;</li>
                            <li>La direction des affaires sociales ;</li>
                            <li>La direction de gestion du patrimoine ;</li>
                            <li>La direction des relations publiques ;</li>
                            <li>La direction de coopération ;</li>
                            <li>La direction de section ;</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <h3>Description du milieu huabout de l’ISTA</h3>
                        <p class="text-justify">Bien que l’ISTA soit un établissement d’enseignement, des activités
                            commerciales se sont implantées au fil du temps, on retrouve un bistro ou l’on sert à boire
                            et à manger, ce bistro est l’ancien réfectoire ou l’institut offrait la restauration aux
                            étudiants et étudiantes lorsque tout fonctionnait bien. </p>
                        <p class="text-justify">Aussi, y trouve-t-on des kiosques de boisson, un mini marché avec des
                            produits spécifiques et des vendeurs et vendeuses ambulants d’eau en sachet et bouteille
                            d’eau et de boissons sucrées en plastique non biodégradable, des fruits de saison et de la
                            nourriture et des vendeurs des cartes prépayées </p>
                        <p class="text-justify">Un atelier mécanique, un centre de santé, un cyber café et une banque
                            occupant des locaux mis à leur disposition par l’institut. Un espace à l’air libre est
                            exploité par des débrouillards avec des photocopieuses, des imprimantes, des ordinateurs
                            etc. tous les équipements pour une bureautique. Il y a également les cabines téléphoniques
                            publiques. </p>
                        <p class="text-justify">Un atelier mécanique, un centre de santé, un cyber café et une banque
                            occupant des locaux mis à leur disposition par l’institut. Un espace à l’air libre est
                            exploité par des débrouillards avec des photocopieuses, des imprimantes, des ordinateurs
                            etc. tous les équipements pour une bureautique. Il y a également les cabines téléphoniques
                            publiques. </p>
                    </div>
                </div><iframe title="Localisation Géographique de l'Istitut Supérieur de Techniques Appliquées"
                    class="w-100 rounded"
                    src="https:/www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4087.25459104986!2d15.33010891476094!3d-4.322763696858021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a36a0fb114e7f%3A0x8eb9e2f35ce7ab16!2sInstitut%20Sup%C3%A9rieur%20des%20Techniques%20Appliqu%C3%A9es%20(I.S.T.A.)!5e1!3m2!1sfr!2scd!4v1650565535253!5m2!1sfr!2scd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section id="services" class="vertical-center dark text-light">
            <div class="container">
                <div class="row wow fadeInDown">
                    <div class="col-lg-12 text-center">
                        <h2 class="title"><span class="id-color">Nos</span>Sections</h2>
                    </div>
                </div>
                <div class="row wow fadeInUp text-justify">
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-box f-border"><i
                                class="fa fa-file-text-o bg-color text-dark"></i>
                            <div class="fb-text">
                                <h3>Préparatoire</h3>
                                <p>Une classe préparatoire est une classe préparant les étudiants de niveau BAC aux
                                    concours d’entrée dans les grandes écoles. Vous conduit à un niveau de connaissance
                                    et de culture généerale unanimement reconnu et apprécié pour la suites de votre
                                    parcour académique et professionnel. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-box f-border"><i
                                class="fa fa-laptop bg-color text-dark"></i>
                            <div class="fb-text">
                                <h3>Informatique</h3>
                                <p>Chaque jours, nous avons recours à des outils informatiques. Des outils, qui, au fil
                                    des années, ses sont inscrits comme indispensable, dans notre quotidien. Tant dans
                                    l'environnement professionnel, que pour la communication. Maitriser l'informatique
                                    est devenu essentiel, afin de se sentir en phase avec l'évolution de la société.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-box f-border"><i
                                class="fa fa-hdd-o bg-color text-dark"></i>
                            <div class="fb-text">
                                <h3>Electronique</h3>
                                <p>L'éléctronique interveint aujourd'hui dans la vie quotidienne de chacun, que ce soit
                                    avec les téléphones mobile, les ordinateurs, les téléviseur et d'autres outils de
                                    TIC, L'électronique joue un rôle prépondérant dans la sécurité et le confort d'un
                                    camion. Elle a pris la place de nombreuses fonctions mécaniques </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-box f-border"><i class="fa fa-cog bg-color text-dark"></i>
                            <div class="fb-text">
                                <h3>Mécanique</h3>
                                <p>Au plan industriel, les sciences mécaniques sont impliquées à tous les niveaux, dans
                                    la conception, la fabrication et la mise en œuvre de systèmes de tous types dans la
                                    plupart des secteurs de la société et aussi dans un très grand nombre d'entreprises
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-box f-border"><i
                                class="fa fa-object-group bg-color text-dark"></i>
                            <div class="fb-text">
                                <h3>Electricité</h3>
                                <p>Comme le feu du temps des hommes préhistoriques, l'électricité a changé la vie de
                                    l'humanité. Elle est devenue indispensable à tout ce qui fait notre vie quotidienne
                                    : se nourrir, se chauffer, s'éclairer, se laver, soigner, communiquer, se déplacer,
                                    fabriquer... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-box f-border"><i
                                class="fa fa-paper-plane-o bg-color text-dark"></i>
                            <div class="fb-text">
                                <h3>Aviation Civile</h3>
                                <p>Aujourd'hui, l'aviation civile internationale revêt plus que jamais une place
                                    importante en matière de développement et les vols internationaux sont désormais
                                    considérés comme des catalyseurs de la paix et de la prospérité dans le monde </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-box f-border"><i
                                class="fa fa-cloud bg-color text-dark"></i>
                            <div class="fb-text">
                                <h3>Météorologie</h3>
                                <p>La météorologie permet d'établir des prévisions météorologiques en s'appuyant sur des
                                    modèles mathématiques à court comme à long terme. Elle est également appliquée pour
                                    la prévision de la qualité de l'air, pour l'étude des chan- gements climatiques et
                                    pour l'analyse dans plusieurs domaines de l'activité humaine. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-box f-border"><i class="fa fa-cogs bg-color text-dark"></i>
                            <div class="fb-text">
                                <h3>Maintenance de Matériel Médical</h3>
                                <p>Vous permet de contribuer à des soins de qualité pour tous les patients et patientes,
                                    et d'augmenter la durée de vie des équipements médicaux, spécifiquement ceux
                                    d'urgence et de réanimation, en assurant la sécurité tant des personnes soignées que
                                    du personnel soignant </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="works" class="vertical-center dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="title"><span class="id-color">Notre</span>Gallerie</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="zoom-gallery row sequence"><?php for ($i=2; $i < 35; $i++) { ?><div
                                class="col-md-4 mb30 gallery-item">
                                <div class="pf_item wow">
                                    <div class="picframe"><a href="/layouts/default/images/portfolio/<?= $i ?>.webp"
                                            title="Project One" data-source="/pages/gallery"><span class="overlay"><span
                                                    class="pf_text"><span
                                                        class="project-name">ISTA-Kinshasa</span></span></span><img
                                                loading="lazy" defer loading="lazy"
                                                src="/layouts/default/images/portfolio/<?= $i ?>.webp" alt=""
                                                class="img-fluid" /></a></div>
                                </div>
                            </div><?php }?></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="history" class="vertical-center dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="title"><span class="id-color">Notre</span>Histoire</h2>
                    </div>
                    <div class="col-lg-12 wow fadeInUp">
                        <blockquote class="s1 c1"><span class="b-text">Nos debut</span><span class="b-arrow"></span>
                        </blockquote>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <p class="text-justify">L’Institut Supérieur de techniques Appliquées de Kinshasa a vu le jour
                            en 1971 lors de la création de l’Université Nationale du Zaire (UNAZA) par l’ordonnance loi
                            N°71/075 du 06/08/1971. L’UNAZA regroupant sous un seul conseil d’Administration, les
                            instituts supérieurs et les 3 universités de Kinshasa, de Kinsangani et de Lubambashi. </p>
                        <h3>Plusieurs Instituts furent fusionnés</h3>
                        <p class="text-justify">Ce fut le cas des instituts suivants :
                        <ul>
                            <li>L’Institut d’aviation civil (IAC) né en 1964 dans la commune de Barumbu par l’ordonnance
                                N°65 du 15/02/1964 modifiée par l’ordonnance N°66/300 du 15/05/1966.</li>
                            <li>Le centre de formation météorologique (CFM) qui fonctionnait à Binza dans la commune de
                                Ngaliema dépuis 1961.</li>
                            <li>L’Ecole Nationale des Postes et de Télécommunication (ENPT) fondée en 1966 dans la
                                commune de la Gombe.</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <p class="text-justify">Leur fusion a donné à l’Institut de météorologie, aviation civile et
                            télécommunication (IMAT) qui résultait de l’article 54 de l’ordonnance présidentielle n°
                            71/075 du 6/08/1971. </p>
                        <h3></h3>
                        <p class="text-justify">L’historique de l’institut Supérieur de Techniques Appliquées est
                            étroitement liée à celle du Révérend Père Jean Marie GUEBEN, le père fondateur de l’ISTA
                            selon l’expression de Monseigneur TSHIBANGU TSHISHIKU alors recteur de l’UNAZA, c’est le
                            révérend Père Jean Marie GUEBEN qui a fait de l’ISTA ce qu’il est aujourd’hui, c’est-à-dire
                            un institut supérieur technique, par le concours de circonstances, en acceptant la lourde
                            mission de réunir dans un même complexe et sous une même dénomination les 3 instituts
                            autonomes susmentionnées. </p>
                    </div>
                    <div class="col-lg-12 wow fadeInUp">
                        <blockquote class="s1 c1"><span class="b-text">Timeline des dirigeants nos
                                directeurs</span><span class="b-arrow"></span></blockquote>
                        <p class="text-justify">L’institut Supérieur de Techniques Appliquées compte 5 organes de
                            décision et de consultation qui sont :</p>
                    </div>
                    <div class="col-md-12">
                        <div class="zoom-gallery row sequence">
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-pierre-kasengedia.webp"
                                                    title="Prof. Pierre Kasengedia"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Pierre
                                                                Kasengedia</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-pierre-kasengedia.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">2011 - 2021</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Kasengedia Mutumbi Pierre
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-kitsisa-khonde-2010-2011.webp"
                                                    title="Prof. Kitsisa Khonde"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Kitsisa
                                                                Khonde</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-kitsisa-khonde-2010-2011.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">2010 - 2011</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Kitsisa Khonde
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-andre-katanga-wa-katanga-2008-2010.webp"
                                                    title="Prof. Andre Katanga Wa Katanga"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Andre Katanga Wa
                                                                Katanga</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-andre-katanga-wa-katanga-2008-2010.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">2008 - 2010</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Andre Katanga Wa Katanga
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-beta-mwakatita-moura-2003-2008.webp"
                                                    title="Prof. Beta Mwakatita Moura"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Beta Mwakatita
                                                                Moura</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-beta-mwakatita-moura-2003-2008.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">2003 - 2008</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Beta Mwakatita Moura
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-pasi-bengi-masata-2002-2003.webp"
                                                    title="Prof. Pasi Bengi Masata"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Pasi Bengi
                                                                Masata</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-pasi-bengi-masata-2002-2003.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">2002 - 2003</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Pasi Bengi Masata
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-bandekela-kazadi-1997-2002.webp"
                                                    title="Prof. Bandekela Kazadi"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Bandekela
                                                                Kazadi</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-bandekela-kazadi-1997-2002.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1997 - 2002</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Bandekela Kazadi
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-mvunzu-zayana-david-1993-1997.webp"
                                                    title="Prof. Mvunzu Zayana David"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Mvunzu Zayana
                                                                David</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-mvunzu-zayana-david-1993-1997.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1993 - 1997</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Mvunzu Zayana David
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-mukana-wa-mwanda-1990-1993.webp"
                                                    title="Prof. Mukana Wa Mwanda"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Mukana Wa
                                                                Mwanda</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-mukana-wa-mwanda-1990-1993.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1990 - 1993</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Mukana Wa Mwanda
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-bayombo-mbokoliabue-1986-1990.webp"
                                                    title="Prof. Bayombo Mbokoliabue"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Bayombo
                                                                Mbokoliabue</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-bayombo-mbokoliabue-1986-1990.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1986 - 1990</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Bayombo Mbokoliabue
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-musa-mundedi-1984-1986.webp"
                                                    title="Prof. Musa Mundedi"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Musa
                                                                Mundedi</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-musa-mundedi-1984-1986.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1984 - 1986</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Musa Mundedi
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-bingoto-mandoko-mampeya-1981-1984.webp"
                                                    title="Prof. Bingoto Mandoko Mampeya"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Bingoto Mandoko
                                                                Mampeya</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-bingoto-mandoko-mampeya-1981-1984.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1981 - 1984</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Bingoto Mandoko Mampeya
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-lubunga-pene-shako-1981-1981.webp"
                                                    title="Prof. Lubunga Pene Shako"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Lubunga Pene
                                                                Shako</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-lubunga-pene-shako-1981-1981.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1981 - 1981</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Lubunga Pene Shako
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-makiese-ntuasa-1979-1981.webp"
                                                    title="Prof. Makiese Ntuasa"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Makiese
                                                                Ntuasa</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-makiese-ntuasa-1979-1981.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1979 - 1981</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Makiese Ntuasa
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/prof-buka-ekangoy-albert-1976-1979.webp"
                                                    title="Prof. Buka Ekangoy Albert"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Prof. Buka Ekangoy
                                                                Albert</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/prof-buka-ekangoy-albert-1976-1979.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1976 - 1979</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Buka Ekangoy Albert
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 gallery-item row">
                                <div class="col-auto">
                                    <div class="f-box f-icon-left f-icon-box f-border">
                                        <div class="pf_item wow">
                                            <div class="picframe"><a
                                                    href="/layouts/default/images/DG/frere-gueben-jean-marie-1971-1976.webp"
                                                    title="Frere Gueben Jean-Marie"
                                                    data-source="?external_link=/profile/teacher/1" e><span
                                                        class="overlay"><span class="pf_text"><span
                                                                class="project-name">Frere Gueben
                                                                Jean-Marie</span></span></span><img loading="lazy"
                                                        src="/layouts/default/images/DG/frere-gueben-jean-marie-1971-1976.webp"
                                                        alt="" class="img-fluid" /></a></div>
                                        </div>
                                    </div>
                                    <div class="fb-text">
                                        <h4 class="mt-2 text-center">1971 - 1976</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Professeur, Docteur
                                        <hr class="my-3">Frere Gueben Jean-Marie
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="vertical-center dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="title">Contactez <span class="id-color">Nous</span></h2>
                    </div>
                </div>
                <form name="contactForm" id="contact_form" class="row form-default form-dark wow fadeInUp"
                    data-wow-delay=".25s" method="post" action="https:/www.designesia.com/themes/oleos/email.php">
                    <div class="col-md-6">
                        <div class="field-set"><input type="text" name="name" id="name" class="form-control"
                                placeholder="Your Name" />
                            <div class="line-fx"></div>
                        </div>
                        <div class="field-set"><input type="text" name="email" id="c_email" class="form-control"
                                placeholder="Your Email" />
                            <div class="line-fx"></div>
                        </div>
                        <div class="field-set"><input type="text" name="phone" id="c_phone" class="form-control"
                                placeholder="Your Phone" />
                            <div class="line-fx"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-set"><textarea name="message" id="message" class="form-control"
                                placeholder="Your Message"></textarea>
                            <div class="line-fx"></div>
                        </div>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="col-md-12 text-center">
                        <div id="submit"><input type="submit" id="send_message" value="Submit Form"
                                class="btn btn-custom" /></div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <div id="separator" class="position-absolute"></div>
    <div id="contenair" class="">
        <div id="contenair-wrapper">