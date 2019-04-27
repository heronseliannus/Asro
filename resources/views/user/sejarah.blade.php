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
    <title> Sejarah Asrama Rahadi Oesman @yeild ('title')</title>
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
                    <img src="images/logo asro.png" width="300" height="150" alt="">
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#service-page">Info</a></li>
                    <li><a href="#feature-page">Profil</a></li>
                    <li><a href="#blog-page">Galery</a></li>
                    <li><a href="#register">Pendaftaran</a></li>
                    <li><a href="#contact-page">Contact</a></li>
                    <li><a href="#">Daftar Penghuni</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->


@yield('content')
    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-12 header-text">
                    <h2>Asrama Rahadi Oesman Bandung</h2>
                    <p>Asrama Rahadi Oesman biasa disingkat ASRO merupakan aset pemerintah provinsi Kalimantan Barat
                    dalam bentuk banggunan, yang antaralain adalah bangunan Asrama Putra Kalimantan Barat yang didirikan 
                    pada tahun XXXX, yang diharapkan sebagai wadah nantinya menapung para Mahasiswa yang berasal dari darerah
                    <br>
                    <br>
                    Provinsi KALIMANTAN BARAT yang dalam  tahap mengenyam pendidikan dikota-kota besar di seluruh wilayah pulau Jawa.
                    Asrama Rahadi Oesman biasa disingkat ASRO merupakan aset pemerintah provinsi Kalimantan Barat
                    dalam bentuk banggunan, yang antaralain adalah bangunan Asrama Putra Kalimantan Barat yang didirikan 
                    pada tahun XXXX, yang diharapkan sebagai wadah nantinya menapung para Mahasiswa yang berasal dari darerah
                    Provinsi KALIMANTAN BARAT yang dalam  tahap mengenyam pendidikan dikota-kota besar di seluruh wilayah pulau Jawa.
                    <br>
                    <br>
                    <b><h3>Status Asrama</h3></b>
                    1. Asrama KPMKB Rahadi Oesman Bandung adalah milik dan di bawah wewenang Pemerintah Daerah Provinsi Kalimantan Barat.
                    <br>
                    <br>
                    2. Asrama KPMKB Rahadi Oesman Bandung adalah Asrama Putra khusus untuk tempat tinggal Pelajar (SMA/SMK/MA) dan Mahasiswa (S-1/D-IV/D-III-D-I), yang berasal dari Kalimantan Barat yang sedang mengenyam masa pendidikan di Kota Bandung dan sekitarnya.
                    <br>
                    <br>
                    3. Asrama KPMKB Rahadi Oesman Bandung juga menampung Warga Kalimantan Barat yang mengikuti Pelatihan, Training, Bimbingan Belajar, Persiapan Masuk Perguruan Tinggi, Profesi, S2 dan S3.
                </p>
                    <a href="asrobandung" class="button white">Kembali</a>
                </div>
                <div class="hidden-xs hidden-sm col-md-4 text-right">
                  
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->