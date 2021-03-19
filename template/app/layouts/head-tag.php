
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