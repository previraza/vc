<?php session_start(); isset($_SESSION['ADMIN']) ? null : header('Location:../login'); require_once '../../app/settings/params/connect'; require_once "../../public/_header.php";if (isset($_GET['teacher']) && is_numeric($_GET['teacher']) && $r = mysqli_fetch_object(mysqli_query($db, "SELECT CONCAT(teachers.firstname, ' ', teachers.lastname) AS name, teachers.* FROM teachers WHERE teachers.delete = 0 AND teachers.id = ".$_GET['teacher']))) { ?>
<title>Publications <?="$r->title. $r->firstname $r->lastname"?> | Institut Supérieur de Techniques Appliquées </title>
<meta name="description" content="<?="$r->title. $r->firstname $r->lastname, $r->biographie | Institut Supérieur de Tecniques Appliquées"?>">
<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
    data-background="/layouts/default/images/portfolio/12.webp"> <span class="background_overlay"></span> <span
        class="design-shape position-absolute"><img src=/public/assets/img/shape/tmd-sh.webp alt=""></span>
    <div class="container">
        <div class="ft-breadcrumb-content headline text-center position-relative">
            <h2><?=$r->name?></h2>
            <div class="ft-breadcrumb-list ul-li">
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li>Enseignants</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="ft-team-details" class="ft-team-details-section page-padding">
    <div class="container">
        <div class="ft-team-details-content position-relative"> <span class="design-shape position-absolute"><img
                    src="/public/assets/img/shape/tmd-sh.webp" alt=""></span>
            <div class="row">
                <div class="col-lg-5">
                    <div class="ft-team-details-img position-relative"> <img src="<?=$r->profile?>" alt=></div>
                </div>
                <div class="col-lg-7">
                    <div class="ft-team-details-text-wrapper headline pera-content">
                        <div class="ft-team-details-text">
                            <h3><?=$r->name?></h3><span><?=get_teacher_role($r->role)?></span> <span>|</span>
                            <span><?=get_teacher_grade($r->title)?></span>
                            <p><?=$r->biographie?></p>
                        </div>
                        <div class="ft-team-details-info ul-li-block">
                            <ul>
                                <li><span>Experience :</span><?=2022-intval($r->birthday)?> ans</li>
                                <li><span>Email :</span><?=$r->email?></li>
                                <?php foreach (explode(' | ', $r->phone) as $k => $v) { ?>
                                <li><span>Phone <?=$k+1?> :</span> <a href="tel:+243<?=$V?>">(+243) <?=$v?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="coming-soon-social d-flex"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a
                                href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i
                                    class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-team-personal-form-cta-wrapper">
            <div class="row">
                <div class="col-lg-9">
                    <div class="ft-team-personal headline pera-content">
                        <h2 class="title" style="background: #f7c243; padding: 10px; border-radius: 10px;">Experience
                            Personnel</h2>
                        <p><?=$r->parcours?></p>
                        <div class="ft-team-personal-skill">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="ft-team-skill-inner align-items-center d-flex">
                                        <div class="counter-boxed headline position-relative">
                                            <div class="graph-outer"> <input type="text" class="dial"
                                                    data-fgColor="#f22728" data-bgColor="#fff" data-width="<?=$r->communication?$r->communication:25?>"
                                                    data-height="<?=$r->communication?$r->communication:25?>" data-linecap="round"
                                                    value="<?=$r->communication?$r->communication:25?>">
                                                <div class="inner-text count-box"><span class="count-text"
                                                        data-stop="<?=$r->communication?$r->communication:25?>" data-speed="3500"></span>%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ft-team-skill-text">
                                            <h3>Communication</h3>
                                            <p>Mod tempor incididunt magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ft-team-skill-inner align-items-center d-flex">
                                        <div class="counter-boxed headline position-relative">
                                            <div class="graph-outer"> <input type="text" class="dial"
                                                    data-fgColor="#f22728" data-bgColor="#fff" data-width="<?=$r->consultation?$r->consultation:25?>"
                                                    data-height="<?=$r->consultation?$r->consultation:25?>" data-linecap="round" value="<?=$r->consultation?$r->consultation:25?>">
                                                <div class="inner-text count-box"><span class="count-text"
                                                        data-stop="<?=$r->consultation?$r->consultation:25?>" data-speed="3500"></span>%</div>
                                            </div>
                                        </div>
                                        <div class="ft-team-skill-text">
                                            <h3>Consultation</h3>
                                            <p>Mod tempor incididunt magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ft-team-skill-inner align-items-center d-flex">
                                        <div class="counter-boxed headline position-relative">
                                            <div class="graph-outer"> <input type="text" class="dial"
                                                    data-fgColor="#f22728" data-bgColor="#fff" data-width="<?=$r->manage ? $r->manage : 25?>"
                                                    data-height="<?=$r->manage ? $r->manage : 25?>" data-linecap="round" value="<?=$r->manage ? $r->manage : 25?>">
                                                <div class="inner-text count-box"><span class="count-text"
                                                        data-stop="<?=$r->manage ? $r->manage : 25?>" data-speed="3500"></span>%</div>
                                            </div>
                                        </div>
                                        <div class="ft-team-skill-text">
                                            <h3>Management</h3>
                                            <p>Mod tempor incididunt magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ft-team-personal-skill">
                            <div class="title 3">Mes ouvrage</div>
                            <div class="row">
                                <?php $rqt = mysqli_query($db, "SELECT * FROM publications WHERE author = $r->id"); while($r2 = mysqli_fetch_object($rqt)){ ?>
                                    <div class="col-md-12">
                                        <div class="ft-team-skill-inner align-items-center d-flex">
                                            <div class="counter-boxed headline position-relative">
                                                <div class="graph-outer"> <input type="text" class="dial" data-fgColor="#f22728" data-bgColor="#fff" data-width="100" data-height="100" data-linecap="round" value="100">
                                                    <a class="inner-text count-box" href="<?= $r2->file ?>">
                                                        <i class="fa fa-3x fa-download" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ft-team-skill-text">
                                                <h3><?=$r2->title?></h3>
                                                <p class=description><?=$r2->resume?></p>
                                                <p>Acteullement le fichier et disponible en téléchargement directe</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="ft-team-contact-form-wrapper">
                            <div class="ft-team-contact-form">
                                <h3>Contact Me</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6"> <input type="text" placeholder="Your Name"> </div>
                                        <div class="col-lg-6"> <input type="email" placeholder="Your Email"> </div>
                                        <div class="col-lg-12"> <input type="text" placeholder="Your Website"> </div>
                                        <div class="col-lg-12"> <textarea name="#"
                                                placeholder="Your Question"></textarea> </div>
                                        <div class="col-lg-12"> <button class="ft-submit-btn">Post Comment <i class="flaticon-right-arrow"></i></button> </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 row">
                <?php $rqt = $db_poo->query("SELECT teachers.*, publications.* FROM publications JOIN teachers ON teachers.id = publications.author WHERE publications.active = 1 AND publications.delete = 0 AND teachers.delete = 0 AND teachers.id !=$r->id LIMIT 3"); while($r = $rqt->fetch_object()){ ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="ft-service-innerbox-2 position-relative">
                            <div class="ft-service-img text-center">
                                <img src="<?=$r->profile?>" alt="">
                            </div>
                            <div class="ft-service-text position-relative headline">
                                <h3><a href="/public/view/?teacher=<?=$r->id?>"><?=$r->title?></a></h3>
                                <p class="description"><?=$r->resume?></p>
                                <div class="ft-btn-2">
                                    <a href="/public/view/?teacher=<?=$r->id?>">
                                        <i class="icon-first flaticon-right-arrow"></i>
                                        <span>Voir plus</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } else { ?>
<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
    data-background="/layouts/default/images/portfolio/12.webp"> <span class="background_overlay"></span> <span
        class="design-shape position-absolute"><img src="/public/assets/img/shape/tmd-sh.webp" alt=""></span>
    <div class="container">
        <div class="ft-breadcrumb-content headline text-center position-relative">
            <h2>Enseignants Introuvable</h2>
            <div class="ft-breadcrumb-list ul-li">
                <ul>
                    <li><a href="/#">Accueil</a></li>
                    <li><a href="#">Profile</a></li>
                    <li>Enseignants</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php require_once "../../public/_footer.php";