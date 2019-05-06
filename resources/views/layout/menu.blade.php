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
    <title>Menu Utama @yield('title')</title>
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
                    <li><a href="galery">Galery</a></li>
                    <li><a href="asrobandung">Pendaftaran</a></li>
                    <li><a href="asrobandung">Contact</a></li>
                    <li><a href="asrobandung">Daftar Penghuni</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->
@yield('content')
     <!-- <section class="section-padding gray-bg" id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Bpa/wakil2018.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Kegiatan Tahunan Asro bandung 2016</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>anda dapat melihat berbagai kegiatan asro 2018 disini</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Bpa/ketua2018.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Kegiatan Tahunan Asro bandung 2017</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>anda dapat melihat berbagai kegiatan asro 2018 disini</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Bpa/sketaris2018.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Kegiatan Tahunan TAsro 2018</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>anda dapat melihat berbagai kegiatan asro 2018 disini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->





    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                        <div class="page-title">
                            <h2>Hubungi Kami Melalui</h2>
                            <p>Akses informasi yang semakin luas membawa kami hingga tahap ini, Asrama Putra Kalimantan Barat di Bandung membuka akses untuk kalian 
                              yang mencari informasi lebih lengkap, Kami juga membagi informasi melalui media sosial lainya, Ikuti juga akun media sosial kami, </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/Ikon/location-arrow.png" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Gegerkalong Hilir Jl. Picung No. 107 Kota Bandung, Jawa Barat<br />Indonesia</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/Ikon/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">082-214-667-037</a> <br />
                                    <a href="callto:8801687420471">(022) 2017204</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/Ikon/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">asro.kalbar.bandung@gmail.com</a> <br />
                                    <a href="mailto:youremail@example.com">heronselianus1795@gmail.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="/testing" id="contact-us-form" method="post" class="contact-form">
                            @csrf
                            <div class="form-double">
                                <input type="text" id="form-contact-name" name="form-name" placeholder="Your name" class="form-control" required="required">
                                <input type="email" id="form-email" name="form-email" class="form-control" placeholder="E-mail address" required="required">
                            </div>
                            <input type="text" id="form-subject" name="form-subject" class="form-control" placeholder="Message topic">
                            <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea>
                            <button type="submit" class="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                <div class="col-xs-12 col-sm-8">
                        <p>untuk info lebih lengkap dan dapat mengikuti beberapa akun media sosial kami
                           atau dapat juga menghubungi kami sesuai dengan kontak yang tertera.
                           suport kami membangun webside ini menjadi lebih baik lagi. trimakasih
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-4 pull-right">
                        <ul class="social-menu text-right x-left">
                        <li ><a href=""> <img src="images/Ikon/telepon.png"></a></li>
                            <li ><a href="https://mail.google.com/mail/u/1/#inbox"> <img src="images/Ikon/email.png"></a></li>
                            <li ><a href=""> <img src="images/Ikon/fb.png"></a></li>
                            <li ><a href="https://www.linkedin.com/in/heron-selianus-69650b180/"> <img src="images/Ikon/linkedin.png"></a></li>
                            <li ><a href="https://www.instagram.com/asro_kalbar_bandung/"> <img src="images/Ikon/instagram.png"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
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