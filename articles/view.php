<?php session_start(); require_once '../app/settings/params/connect'; require_once "../public/_header.php" ;
    if (isset($_GET['action'], $_GET['comment']) && ($_GET['action'] == 'delete') && is_numeric($_GET['comment']))
        mysqli_query($adminer, "UPDATE `comments` SET `comments`.`delete` = '1' WHERE `id` = $_GET[comment]");
?>
<section id="ft-blog-feed-details" class="ft-blog-feed-details-section page-padding mt-5">
    <div class="container">
        <div class="ft-blog-feed-details-content">
            <div class="row">
                <?php if($art = mysqli_fetch_array(mysqli_query($adminer, "SELECT articles.*, admin.full_name AS name FROM articles LEFT JOIN admin ON admin.id = articles.author WHERE articles.delete = 0 AND articles.active = 1 AND articles.id = ".(isset($_GET['article']) && is_numeric($_GET['article']) ? $_GET['article'] : 0)))) { 
                    mysqli_query($adminer, "UPDATE articles SET view = (view+1) WHERE id = $art[id]");?>
                    <meta property="og:type" content="article">
                    <meta property="og:image" content="<?= $art['poster'] ?>">
                    <meta property="og:title" content="<?= $art['title'] ?>">
                    <meta property="og:locale" content="fr_Fr">
                    <meta property="og:description" content="<?= $art['resume'] ?>">
                    <meta name="twitter:card" content="summary"/>
                    <meta name="twitter:domain" content="www.ista.ac.cd"/>
                    <meta name="twitter:title" property="og:title" itemprop="name" content="<?= $art['title'] ?>" />
                    <meta name="twitter:description" property="og:description" itemprop="description" content="<?= $art['resume'] ?>" />
                    
                <div class="col-lg-9">
                    <div class="blog-details-img-text-wrapper">
                        <div class="blog-details-img position-relative">
                            <img src="<?= $art['poster'] ?>" alt="">
                        </div>
                        <div class="ft-blog-details-item">
                            <div class="blog-details-text headline">
                                <div class="ftd-blog-meta-2  position-relative text-capitalize">
                                    <h3><?= $art['title'] ?></h3>
                                    <a href="#"><i class="far fa-user"></i> <?= $art['name'] ?></a>
                                    <a href="#"><i class="far fa-eye"></i> <?= $art['view'] ?></a>
                                    <a href="#"><i class="far fa-clock"></i> <?= $art['datetime'] ?></a>
                                </div>
                                <article>
                                <?= $art['content'] ?>
                                </article>
                            </div>
                            <div class="ft-blog-tag-share clearfix">
                                <div class="ft-blog-tag float-left">
                                    <span>Nous suivre :</span>
                                </div>
                                <div class="ft-blog-share float-right">
                                    <a class="fb-social" href="#"><i class="fab fa-facebook-f"></i><span>Like Us</span></a> 
                                    <a class="tw-social" href="#"><i class="fab fa-twitter"></i><span>Like Us</span></a>
                                    <a class="ln-social" href="#"><i class="fab fa-linkedin-in"></i><span>Like Us</span></a>
                                    <a  class="in-social" href="#"><i class="fab fa-instagram"></i><span>Like Us</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ft-blog-comment headline mt-3">
                        <?php $get_comm = mysqli_query($adminer, "SELECT * FROM comments WHERE `delete` = 0 AND article = $art[id]") ?>
                        <h3>Commentaire (<?= mysqli_num_rows($get_comm) ?>)</h3>
                        <div class="ft-blog-comment-block-wrapper">
                            <?php while($comm = mysqli_fetch_array($get_comm)){ ?>
                            <div class="ft-blog-comment-block">
                                <div class="ft-blog-comment-text headline pera-content position-relative">
                                    <h4><a href="#"><?= $comm['author'] ?></a></h4>
                                    <span><?= $comm['datetime'] ?> </span>
                                    <p><?= $comm['content'] ?></p>
                                    <?= isset($_SESSION['ADMIN']) ? '<a class="ftd-reply-btn text-center text-uppercase" href="?article='.$art['id'].'&action=delete&comment='.$comm['id'].'">delete</a>' : NULL ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <h3>Poster un Commentaire</h3>
                        <div class="ftd-blog-comment-form">
                            <form action="/admin/submit/form/comments.php?form=dynamic" method="post" dynamic-form>
                                <div class="ftd-comment-form-input">
                                    <label>Votre email ne sera pa publier *</label>
                                    <div class="ftd-comment-input-wrap d-flex">
                                        <input type="hidden" name="comment[article]" value="<?= $art['id'] ?>">
                                        <input required type="text" name="comment[author]" placeholder="Nom complet">
                                        <input required type="email" name="comment[email]" placeholder="Adresse electronique">
                                        <input required type="text" name="comment[phone]" placeholder="Numéro téléphone">
                                        <input type="hidden" name="request_corps" value="submit_formulary_sotck_admin_add_comment">
                                    </div>
                                    <textarea name="comment[content]" placeholder="Votre commentaire"></textarea>
                                    <div class='.errorRapport'></div>
                                    <button type="submit">Poster</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <?php } else echo '<div class="col-lg-12"><h3 class="border py-3 mb-3 bg-secondary px-3 rounded-3 h1_big">Article indisponible...</h3>'; ?>
                    <div class="ft-side-bar-wrapper top-stikcy">
                        <div class="ft-side-bar-widget-area">
                            <div class="ft-side-bar-widget search-widget-area headline ul-li-block">
                                <div class="search-widget position-relative">
                                    <form action="?form=dynamic" dynamic-form>
                                        <input type="text" placeholder="Search.">
                                        <button><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="ft-side-bar-widget headline ul-li-block">
                                <div class="recent-news-widget">
                                    <h3 class="widget-title position-relative">Recente Publications</h3>
                                    <?php $rqt = mysqli_query($adminer, "SELECT articles.*, admin.full_name as name FROM articles LEFT JOIN admin ON admin.id = articles.author WHERE articles.delete = 0 AND articles.active = 1 AND articles.id != ".(isset($_GET['article']) && is_numeric($_GET['article']) ? $_GET['article'] : 0)." ORDER BY datetime DESC"); while($r = mysqli_fetch_array($rqt)) { ?>
                                    <div class="recent-blog-img-text clearfix">
                                        <div class="recent-blog-img float-left">
                                            <img src="<?= $r['poster'] ?>" alt="">
                                        </div>
                                        <div class="recent-blog-text headline">
                                            <h3><a href="/articles/view.php?article=<?= $r['id'] ?>"><?= $r['title'] ?></a></h3>
                                            <span><i class="far fa-calendar-alt"></i><?= $r['datetime'] ?></span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</section>	
<?php require_once "../public/_footer.php" ?>
<script>
    document.title = `ISTA-Kinshasa | Article - <?= $art['title'] ?? "Undefined" ?>`;
    document.getElementsByTagName('meta').author.content = `<?= $art['name'] ?? "Undefined" ?>`;
    document.getElementsByTagName('meta').description.content = `<?= $art['resume'] ?? "Undefined" ?>`;
</script>