<footer class="footer">
    <section class="app bg-map">
        <section class="footer-row">
            <section class="footer-col">
                <img class="footer-logo" src="http://localhost/admin-panel/<?php echo $setting['logo'];?>" alt="">
                <section class="clear-fix"></section>
                <p class="footer-p"><?php echo $setting['description'];?></p>
                <p class="footer-p footer-p-margin-20">
                    Copyright 2021 All rights reserved | This template is made <i class="ion-heart" aria-hidden="true"></i> by  <a href="https://www.linkedin.com/in/arvin-zarei-8137a61b3/" target="_blank">Arvin Zarei</a>
                </p>
            </section>
            <section class="footer-col">
                <h3 class="footer-section-title">محبوب ترین ها</h3>
                <?php foreach ($popularArticles as $article) {?>
                    <section class="footer-section-link-item">
                        <a href="http://localhost/admin-panel/show-article/<?php echo $article['id']; ?>"><?php echo $article['summary'];?></a>
                    </section>
                    <section class="footer-line"></section>
                <?php }?>
            </section>

            <section class="footer-col">
                <h3 class="footer-section-title">دسته بندی ها </h3>
                <?php foreach ($popularArticles as $article) {?>
                    <section class="footer-section-link-item">
                        <a href="http://localhost/admin-panel/show-article/<?php echo $article['id']; ?>"><?php echo $article['summary'];?></a>
                    </section>
                    <section class="footer-line"></section>
                <?php }?>
            </section>

            <section class="clear-fix"></section>
        </section>
        <section class="footer-line"></section>
        <section class="footer-row">
            <ul class="footer-menu" style="text-align: right">
                <?php  foreach ($menus as $menu) { ?>
                    <li><a href=""><?php echo $menu['name']; ?></a></li>
                <?php }?>
            </ul>
            <ul class="footer-social-network">
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-bitcoin"></i></a></li>
            </ul>
            <section class="clear-fix"></section>
        </section>
    </section>
    <section class="clear-fix"></section>
</footer>

<script type="text/javascript">
    function showMenu() {
        var x = document.getElementById("menu");
        if (x.className === "header-menu") {
            x.className += " show";
            console.log(1);
        } else {
            x.className = "header-menu";
            console.log(0);
        }
    }
</script>

</body>
</html>