<?php require_once '../app/settings/params/connect'; require_once "../public/_header.php" ?>
<section id="ft-blog" class="ft-blog-section">
    <div class="container">
        <div class="ft-blog-top-content d-flex justify-content-between align-items-end flex-wrap">
            <div class="ft-section-title headline pera-content">
                <span class="sub-title">Articles</span>
                <h2>Rester informer de nos activités</h2>
            </div>
        </div>
        <div class="ft-blog-feed-content">
            <div class="row">
                <?php $c=0; $rqt = mysqli_query($adminer, "SELECT articles.*, admin.full_name as name FROM articles LEFT JOIN admin ON admin.id = articles.author WHERE articles.delete = 0 AND articles.active = 1 ORDER BY datetime DESC"); while($r = mysqli_fetch_array($rqt)) { $c++ ?>
                    <?= $c==2?'<div class="col-lg-6 row p-0 m-0">': null ?>
                    <?= $c==6?'</div> <div class="col-lg-12 row p-0 m-0">': null ?>
                    <div class="col-lg-<?= $c>5?4:6?>">
                        <div class="ft-blog-feed-wrapper-2 shadow-lg rounded-3 p-3 mb-4">
                            <div class="ft-blog-news-feed-innerbox wow fadeInUp d-block" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="ft-blog-feed-img w-100 mb-3 h-auto">
                                    <img loading="lazy" class="w-100" src="<?= $r['poster'] ?>" alt="">
                                </div>
                                <div class="ft-blog-feed-text headline pera-content w-100">
                                    <div class="ft-blog-meta d-flex justify-content-between flex-wrap">
                                        <div class="ft-blog-data">
                                            <a href="/articles/view.php?article=<?= $r['id'] ?>"><i class="far fa-calendar-alt"></i> <?= $r['datetime'] ?></a>
                                        </div>
                                        <div class="ft-blog-comment-view">
                                            <a href="/articles/view.php?article=<?= $r['id'] ?>"><i class="far fa-eye"></i> <?= $r['view'] ?></a>
                                        </div>
                                    </div>
                                    <h3><a class="teal" href="/articles/view.php?article=<?= $r['id'] ?>"><?= $r['title'] ?></a></h3>
                                    <p><?= $r['resume'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php require_once "../public/_footer.php" ?>