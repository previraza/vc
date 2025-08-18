<section id="ft-service-page" class="ft-service-page-section page-padding">
    <div class="container">
        <div class="ft-section-title-2 headline pera-content text-center">
            <h2>Publication de nos enseignants</h2>
        </div>
        <div class="ft-service-page-items">
            <div class="row">
                <?php $l = 6*(1-(isset($_GET['list'])&&is_numeric($_GET['list'])?$_GET['list']:1)); $rqt = $db_poo->query("SELECT teachers.*, publications.* FROM publications JOIN teachers ON teachers.id = publications.author WHERE publications.active = 1 AND publications.delete = 0 AND teachers.delete = 0 ORDER BY datetime LIMIT 6 OFFSET $l"); while($r = $rqt->fetch_object()){ ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-service-innerbox-2 position-relative">
                            <div class="ft-service-img text-center">
                                <img src="<?=$r->profile?>" alt="">
                            </div>
                            <div class="ft-service-text position-relative headline">
                                <div class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                    <i class="fas text-primary fa-share-alt"></i>
                                    <ul class="dropdown" data-sl="/public/view/?teacher=<?=$r->id?>">
                                        <li class="sl"><a href="#" class=sla data-sll=wa><i class="sli fa fa-whatsapp"></i></a></li>
                                        <li class="sl"><a href="#" class=sla data-sll=fb><i class="sli fa fa-facebook"></i></a></li>
                                        <li class="sl"><a href="#" class=sla data-sll=tw><i class="sli fa fa-twitter "></i></a></li>
                                        <li class="sl"><a href="#" class=sla data-sll=te><i class="sli fa fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                                <title>Publications et article des enseignants de l'Institut Supérieur de Techniques Appliquées </title>
                                <meta name="description" content="<?="article de $r->firstname $r->lastname, Intitulé $r->title : $r->resume | Institut Supérieur de Tecniques Appliquées"?>">
                                <h3><a href="/public/view/?teacher=<?=$r->id?>"><?=$r->title?></a></h3>
                                <p class="description"><?=$r->resume?></p>
                                <div class="ft-btn-2">
                                    <a href="/public/view/?teacher=<?=$r->id?>">
                                        <i class="icon-first flaticon-right-arrow"></i>
                                        <span>Voir plus</span>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="ft-service-serial position-absolute">1</div> -->
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="ft-pagination-item text-center ul-li">
                <ul>
                    <?php str_repeat('<li><a href="'.(!isset($i)||!is_numeric($i)?"#".$i=0:"/?page=publication&list=".$i).'" '.$i=1?"class=bg-secondary":null.'>'.($i++).'</a></li>',ceil($db_poo->query("SELECT * FROM publications JOIN teachers ON teachers.id = publications.author WHERE publications.active = 1 AND publications.delete = 0 AND teachers.delete = 0")->num_rows/12)); ?>
                </ul>
            </div>
        </div>
    </div>
</section>