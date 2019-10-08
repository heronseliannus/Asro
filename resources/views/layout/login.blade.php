<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Menu Utama Login @yield('title')</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="logo-asro.jpg" href="images/logo-asro.jpg">
    <link rel="shortcut icon" type="image/logo.jpg" href="images/logo-asro.jpg" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

 
        <!-- <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->

</head>

<body data-spy="scroll" data-target="#primary-menu">
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="asrobandung" class="navbar-brand logo">
                    <img src="images/logo asro.png" width="200" height="10" alt="">
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="asrobandung">Info</a></li>
                    <li><a href="asrobandung">Profil</a></li>
                    <li><a href="asrobandung">Galery</a></li>
                    <li><a href="asrobandung">Contact</a></li>
                    <li><a href="asrobandung">Daftar Penghuni</a></li>
                    <li><a href="formdaftar">Pendaftaran</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->

<!-- header area -->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                <div class="box">
                    <h2>Login</h2>
                    <div calass="col-xs-12 col-sm-2">
                        <form action="#" class="#" name="" id="">
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Username </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="input User Name">
                                </div>
                                <label class="col-sm-2"> Password </label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </form>
                        <a href="#" class="button red">Login</a>
                        <a href="#" class="button white">Kembali</a>
                        <a href="#" class="button white">Hapus</a>
                    </div>
                </div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src="images/Berita/Konten1.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/Berita/Konten2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/Berita/Heron.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- header area -->
<section class="section-padding gray-bg" id="">
    <div class="container">
        <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="#" alt="">
                        </div>
                        <div class="blog-content text-center">
                            <h3><a href="#">Grafik Indeks 2018-2019</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Pontianak</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Ketua Asrama Rahadi Osman Bandung periode 2018-2019, Berasal dari Pontianak, mengeyam pendidikan s1 di Universitas Pendidikan Indonesia
                               Jurusan Pendidikan Olahraga.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="#" alt="">
                        </div>
                        <div class="blog-content text-center">
                            <h3><a href="#">Index Grafik 2018-2019</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Pontianak</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Ketua Asrama Rahadi Osman Bandung periode 2018-2019, Berasal dari Pontianak, mengeyam pendidikan s1 di Universitas Pendidikan Indonesia
                               Jurusan Pendidikan Olahraga.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="#" alt="">
                        </div>
                        <div class="blog-content text-center">
                            <h3><a href="#">Indek Grafik 2018-2019</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Pontianak</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Ketua Asrama Rahadi Osman Bandung periode 2018-2019, Berasal dari Pontianak, mengeyam pendidikan s1 di Universitas Pendidikan Indonesia
                               Jurusan Pendidikan Olahraga.
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        Heronselianus &copy;Copyright 2019 All right resurved.
                    </div>
                </div>
            </div>
        </div>
    </footer>


    
    <!--Vendor-JS-->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/contact-form.js')}}"></script>
    <script src="{{ asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{ asset('js/scrollUp.min.js')}}"></script>
    <script src="{{ asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{ asset('js/main.js')}}"></script>


</body>
</html>