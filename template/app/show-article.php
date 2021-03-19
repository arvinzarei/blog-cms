
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
                <section class="main-news">
                    <h2 class="title">Hello world</h2>
                    <article>

                        <img class="main-news-img" src="http://localhost/admin-panel/1" alt="">
                        <h3 class="article-title">
                            <a href="http://localhost/admin-panel/show-article/1">Hello World</a>
                        </h3>
                        <ul class="info-bar">
                            <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b>Kamran,</b></a>
                                <span class="text-muted"> feb 19 2019</span></li>
                            <li><i class="fas fa-bolt text-yellow"></i> 128</li>
                            <li><i class="fas fa-comments text-yellow"></i> 34</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur atque consectetur dicta dolores dolorum eligendi esse fuga fugit impedit incidunt inventore maxime, nam necessitatibus nesciunt officiis provident qui quo quos ratione recusandae reprehenderit rerum sapiente sed sequi suscipit, tempora veritatis! Dignissimos distinctio exercitationem id officia officiis pariatur provident sunt voluptas voluptatibus, voluptatum! Ad aut beatae eaque ipsa necessitatibus pariatur quo saepe totam? Alias beatae corporis nesciunt non quam. Alias animi, corporis cupiditate debitis, dolor eligendi eum ex facilis ipsa iusto magni modi, nihil optio quas qui rem similique vitae voluptates?</p>

                        <p class="footer-p-margin-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores consequatur culpa cum cumque dolorem doloribus dolorum, ducimus enim fugiat modi natus nulla quia quod reiciendis rem ullam, velit veritatis vitae voluptas! Blanditiis cumque fugiat hic iure labore magnam quia quis velit. Adipisci architecto asperiores assumenda, beatae consequuntur corporis dolore ducimus est explicabo facilis fugit illum iure labore laboriosam molestiae molestias neque nobis placeat quae quas quod quos repellat saepe sed temporibus tenetur ut voluptas. Doloribus earum id officiis optio quasi. Ad aperiam aut blanditiis, dolore dolorem dolorum et expedita explicabo fugiat ipsa labore laboriosam, laborum laudantium natus nihil porro provident similique temporibus ut velit. Accusantium beatae ducimus facere fugit itaque maiores neque nesciunt nihil perferendis provident ratione repudiandae, tenetur voluptas? Eos, neque, similique? Dolores exercitationem, nesciunt! Aliquam aliquid aspernatur delectus dolore doloribus earum eos error esse, et expedita illum maiores necessitatibus, placeat, quos reprehenderit totam voluptate. Consequatur, debitis ipsa laboriosam maiores minus quibusdam. Ab commodi, dolore eius et excepturi omnis quis temporibus veniam voluptates voluptatum. Distinctio dolorem, ex. Ab atque beatae consectetur dolorum, enim error ex fugit incidunt ipsam magni necessitatibus non nostrum optio porro provident quam quia quis quo similique ut vero voluptate voluptates? Ad blanditiis eius ex exercitationem, laboriosam modi placeat? Ad aliquid amet aperiam asperiores atque culpa distinctio dolores dolorum fugit hic illum inventore iste laborum maiores minus nesciunt perferendis porro quas, quidem sint temporibus veritatis vero voluptatibus? Ad assumenda delectus laborum laudantium mollitia possimus sapiente similique tempore. A aliquid animi consectetur corporis cupiditate delectus deserunt doloremque eaque eos et excepturi fugiat harum hic ipsa maiores, nisi porro quam qui sequi sint sit tenetur ut vitae voluptatibus voluptatum. Molestias, quo, voluptates! Accusamus consequatur deserunt dicta neque, obcaecati possimus praesentium quod? Ab animi, asperiores at distinctio error id perferendis porro, quae quasi qui quia sequi veritatis voluptas.</p>

                    </article>


                        <section class="comment-box">
                            <h3 class="comment-box-header">
                                <span class="comment-box-date">feb 20 2019</span>
                            </h3>
                            <comment>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem, eum itaque nam officiis perspiciatis quas qui quibusdam, temporibus ullam unde veritatis vero voluptatum.
                            </comment>
                        </section>

                    <form action="http://localhost/admin-panel/comment-store" method="post">
                            <input name="article_id" type="hidden" value="1">
                        <textarea class="comment" name="comment" rows="4" required placeholder="your comment ..."></textarea>
                        <input class="submit" type="submit" value="store comment">
                    </form>

                </section><!--end of main news-->


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