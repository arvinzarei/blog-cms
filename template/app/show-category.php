<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php"));
?>
<section class="content">
    <section class="container">
        <main class="main">
            <section class="main-crypto-mining-news">
                <h2 class="title"><?php echo $category['name']; ?></h2>
                <?php foreach ($articles as $article) {?>
                    <section class="main-news-w-50">
                        <article>
                            <img class="main-news-img" src="http://localhost/admin-panel/<?php echo $article['image']; ?>" alt="">
                            <h3 class="article-title">
                                <a href="http://localhost/admin-panel/show-article/<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
                            </h3>
                            <ul class="info-bar">
                                <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b><?php echo $article['username']; ?></b></a>
                                    <span class="text-muted"><?php echo date("M d,Y",strtotime( $article['created_at'])); ?></span></li>
                                <li><i class="fas fa-bolt text-yellow"></i> <?php echo $article['view']; ?></li>
                                <li><i class="fas fa-comments text-yellow"></i><?php echo $article['comments_count']; ?></li>
                            </ul>
                        </article>
                    </section>
                <?php }?>
                <section class="clear-fix"></section>
            </section><!--end of main crypto mining news-->
        </main><!--end of main-->

        <?php require_once(realpath(dirname(__FILE__) . "/../app/layouts/sidebar.php")); ?>

        <section class="clear-fix"></section>
    </section><!--end of container-->
</section><!--end of content-->
</section><!--end of first app section-->

<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/footer.php"));
?>