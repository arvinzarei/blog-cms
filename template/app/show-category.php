
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>html and css project</title>


    <link href="http://localhost/admin-panel/public/css/app/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
<section class="app">
    <header>
        <nav class="header">
            <img class="header-logo" src="http://localhost/admin-panel/public/images/logo-black.png" alt="">
            <button class="header-menu-burger" onclick="showMenu()" type="button"><i class="fas fa-bars"></i></button>
            <ul class="header-menu" id="menu">
                <li class="header-menu-item"><a class="header-menu-item-link"  href="#">Home</a></li>
                <li class="header-menu-item"><a class="header-menu-item-link"  href="#">News</a></li>
                <li class="header-menu-item"><a class="header-menu-item-link"  href="#">Economic</a></li>
                <li class="header-menu-item"><a class="header-menu-item-link"  href="#">Sport</a>
                    <span>
                        <a href="#">football</a>
                        <a href="#">basketball</a>
                    </span>
                </li>
            </ul>
            <section class="clear-fix"></section>
        </nav><!--end of navbar-->
    </header><!--end of header-->
    <section class="content">
        <section class="container">
            <main class="main">
                <section class="main-crypto-mining-news">
                    <h2 class="title">Sport</h2>
                    <section class="main-news-w-50">
                        <article>
                            <img class="main-news-img" src="http://localhost/admin-panel/" alt="">
                            <h3 class="article-title">
                                <a href="http://localhost/admin-panel/show-article/1">Hello world</a>
                            </h3>
                            <ul class="info-bar">
                                <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b>Kamran,</b></a>
                                    <span class="text-muted">feb 21 2019</span></li>
                                <li><i class="fas fa-bolt text-yellow"></i> 131</li>
                                <li><i class="fas fa-comments text-yellow"></i> 12</li>
                            </ul>
                        </article>
                    </section>

                    <section class="clear-fix"></section>
                </section><!--end of main crypto mining news-->
            </main><!--end of main-->

            <aside class="sidebar">
                <section class="sidebar-item">
                    <ul class="sidebar-list">
                        <li><a href="http://localhost/admin-panel/show-category/1"><b>Lorem ipsum dolor.</b></a></li>
                    </ul>
                </section>
                <section class="sidebar-item">
                    <h2 class="title">POPULAR POSTS</h2>

                    <section class="popular-post">
                        <img class="popular-post-img" src="http://localhost/admin-panel/4" alt="">
                        <section class="popular-post-title">
                            <h3>
                                <a href="http://localhost/admin-panel/show-article/5"><b>Lorem ipsum dolor.</b></a>
                            </h3>
                            <ul class="info-bar">
                                <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b>Kamran,</b></a>
                                    <span class="text-muted">feb 4 2019</span></li>
                            </ul>
                        </section>
                        <section class="clear-fix"></section>
                    </section>
                </section>


            </aside><!--end of sidebar-->

            <section class="clear-fix"></section>
        </section><!--end of container-->
    </section><!--end of content-->
    </section><!--end of first app section-->




<footer class="footer">
    <section class="app bg-map">
        <section class="footer-row">
            <section class="footer-col">
                <img class="footer-logo" src="images/logo-white.png" alt="">
                <section class="clear-fix"></section>
                <p class="footer-p">Bit coin is an open-source, peer-to-peer, digital decentralized cryptocurrency.
                    Powered by blockchain technology, its defining characteristic is</p>
                <p class="footer-p footer-p-margin-20"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright 2019 All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </section>
            <section class="footer-col">
                <h3 class="footer-section-title">MOST POPULAR</h3>
                <section class="footer-section-link-item">
                    <a href="#">Its Make or Break Time for Bitcoin</a>
                    <p>Jan 25, 2018</p>
                </section>
                <section class="footer-line"></section>
                <section class="footer-section-link-item">
                    <a href="#">Its Make or Break Time for Bitcoin</a>
                    <p>Jan 25, 2018</p>
                </section>
            </section>
            <section class="footer-col">
                <h3 class="footer-section-title">MOST POPULAR</h3>
                <section class="footer-section-link-item">
                    <a href="#">Its Make or Break Time for Bitcoin</a>
                    <p>Jan 25, 2018</p>
                </section>
                <section class="footer-line"></section>
                <section class="footer-section-link-item">
                    <a href="#">Its Make or Break Time for Bitcoin</a>
                    <p>Jan 25, 2018</p>
                </section>
            </section>
            <section class="clear-fix"></section>
        </section>
        <section class="footer-line"></section>
        <section class="footer-row">
            <ul class="footer-menu">
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy policy</a></li>
                <li><a href="">Jobs advertising</a></li>
                <li><a href="">Contact us</a></li>
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
    </section><!--end of second app section-->
    <section class="clear-fix"></section>
</footer><!--end of footer-->

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