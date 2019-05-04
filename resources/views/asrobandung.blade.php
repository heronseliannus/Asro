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
    <title>Asro Bandung</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="logo-asro.jpg" href="images/logo-asro.jpg">
    <link rel="shortcut icon" type="image/logo-asro.jpg" href="images/logo-asro.jpg" />
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
                <a href="#" class="navbar-brand logo">
                    <img src="images/logo asro.png" width="200" height="10" alt="">
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#service-page">Info</a></li>
                    <li><a href="#feature-page">Profil</a></li>
                    <li><a href="#blog-page">Galery</a></li>
                    <li><a href="formdaftar">Pendaftaran</a></li>
                    <li><a href="#contact-page">Contact</a></li>
                    <li><a href="galery">Daftar Penghuni</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>Asrama Rahadi Oesman Bandung</h2>
                    <p>Asrama Rahadi Oesman biasa disingkat ASRO merupakan aset pemerintah provinsi Kalimantan Barat
                    dalam bentuk banggunan, yang antaralain adalah bangunan Asrama Putra Kalimantan Barat yang didirikan 
                    pada 5 Mei 2005, yang diharapkan sebagai wadah nantinya menapung para Mahasiswa yang berasal dari darerah
                    Provinsi KALIMANTAN BARAT yang dalam  tahap mengenyam pendidikan dikota-kota besar di seluruh wilayah pulau Jawa.</p>
                    <a href="sejarah" class="button white">Baca Lebih Lanjud</a>
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
                            <img src="images/Berita/Konten3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/Berita/Heron.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/Berita/Banner Asro.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->



    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/Makrab/Makrab 1.jpg" alt="">
                        </div>
                        <h4>Makrab KPMKB-Bandung 2019</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/Tari.jpg" alt="">
                        </div>
                        <h4>Seni Dan Kreasi KPMKB 2018</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/Angkatan/kemah 1.jpg" alt="">
                        </div>
                        <a href="#"><h4>Kegiatan Keakraban 2017</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature-area/-->


    <section class="angle-bg sky-bg section-padding" id="feature-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Ketua Asrama Kalbar 2016-2017 Bandung</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Description :
                                               Anda dapat melihat porfile kepengurusan di tahun 2016-2017, serta dapat melihat
                                               data diri mereka disini.
                                            </p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="pengurus2016" class="button">Lihat Profile</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/Kepengurusan/2016-2017/Aris.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight">
                                            <img src="images/Kepengurusan/2016-2017/Dani.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Ketua Asrama Kalbar 2017-2018 Bandung</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Description :
                                               Anda dapat melihat porfile kepengurusan di tahun 2016-2017, serta dapat melihat
                                               data diri mereka disini.
                                            </p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="pengurus2017" class="button">Lihat Profile</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/Kepengurusan/2017-2018/Ferdy.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight">
                                            <img src="images/Kepengurusan/2017-2018/Heron.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Ketua Asrama Kalbar 2018-2019 Bandung</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Description :
                                               Anda dapat melihat porfile kepengurusan di tahun 2016-2017, serta dapat melihat
                                               data diri mereka disini
                                            </p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="pengurus2018" class="button">Lihat Profile</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/Kepengurusan/2018-2019/Alif.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight">
                                            <img src="images/Kepengurusan/2018-2019/Hendrikus.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Ketua Asrama Kalbar 2019-2020 Bandung</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Description :
                                               Anda dapat melihat porfile kepengurusan di tahun 2016-2017, serta dapat melihat
                                               data diri mereka disini
                                            </p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="#" class="button">Lihat Profile</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/Kepengurusan/2019-2020/Okang.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight">
                                            <img src="images/Kepengurusan/2019-2020/Heron.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>Badan Pengurus Asrama</strong>Asrama Kalbar 2016-2017
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                                <strong>Badan Pengurus Asrama </strong>Asrama Kalbar 2017-2018
                            </li>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>Badan Pengurus Asrama</strong>Asrama Kalbar 2018-2019
                            </li>
                            <li data-target="#caption_slide" data-slide-to="3">
                                <strong>Badan Pengurus Asrama</strong>Asrama Kalbar 2029-2020
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding gray-bg" id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Bpa/heron.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Wakil Ketua Asrama</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Wakil Ketua Asrama Rahadioesman Bandung periode 2018-2019, Berasal dari kabupaten Landak, mengeyam pendidikan s1 di Universitas Jendral Ahmadyani Bandung
                            Jurusan Teknik Sipil, angkatan tahun masuk 2017 </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Bpa/heron.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Ketua Asrama</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Wakil Ketua Asrama Rahadioesman Bandung periode 2018-2019, Berasal dari kabupaten Landak, mengeyam pendidikan s1 di Universitas Jendral Ahmadyani Bandung
                            Jurusan Teknik Sipil, angkatan tahun masuk 2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Bpa/heron.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Sketaris Asrama</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Sketaris Asrama Rahadioesman Bandung periode 2018-2019, Berasal dari kabupaten Landak, mengeyam pendidikan s1 di Universitas Jendral Ahmadyani Bandung
                            Jurusan Teknik Sipil, angkatan tahun masuk 201</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-area section-padding gray-bg overlay" id="feature-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Keluarga Besar Asrama Rahadi Oesman Bandung</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="testimonials">
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/asro1.jpg" alt="">
                            </div>
                            <h3>Angkatan 2016</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/asro1.jpg" alt="">
                            </div>
                            <h3>Angkatan 2017</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/asro1.jpg" alt="">
                            </div>
                            <h3>Angkatan 2018</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/asro1.jpg" alt="">
                            </div>
                            <h3>Angkatan 2019</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/asro1.jpg" alt="">
                            </div>
                            <h3>Angkatan 2020</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/asro1.jpg" alt="">
                            </div>
                            <h3>Angkatan 2021</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding gray-bg" id="blog-page">
    <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/sambas.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Ikmas Bandung</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Pemprov.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Ikmas Bandung</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Kpmkb.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Ikmas Bandung</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Asro.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Ikmas Bandung</a></h3>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </footer>


    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact with us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
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
                                    <strong>Alamat: </strong>Jl. Gegerkalong Hilir Jl. Picung No. 107 Kota Bandung, Jawa Barat<br/>Indonesia</strong>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/Ikon/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">082-214-667-037</a> <br/>
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
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li ><a href=""> <img src="images/Ikon/telepon.png"></a></li>
                            <li ><a href=""> <img src="images/Ikon/email.png"></a></li>
                            <li ><a href=""> <img src="images/Ikon/fb.png"></a></li>
                            <li ><a href=""> <img src="images/Ikon/linkedin.png"></a></li>
                            <li ><a href=""> <img src="images/Ikon/instagram.png"></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>untuk info lebih lengkap, dapat menghubungi kami dengan akun media sosial kami.
                            suport kami membangun webside ini menjadi lebih baik lagi. trimakasih
                        </p>
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