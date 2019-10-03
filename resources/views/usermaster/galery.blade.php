<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title -->
    <title> Form Data Mahasiswa @yield('title')</title>
    <!-- top in root -->
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


<footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                        <div class="page-title">
                            <h2>Form Data Mahasiswa Kaliman Barat</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-10 col-sm-offset-1 ">
                    <form action="#" id="contact-us-form" method="post" class="contact-form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Nama Lengkap </label>
                            <div class="col-sm-10">              
                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat </label>
                            <div class="col-sm-10">
                                <textarea name="text" class="form-control" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Jenis Kelamin <br></label>
                                <input type="checkbox" class="#" placeholder="Laki-laki">Laki-laki
                                <input type="checkbox" class="#" placeholder="Perempuan">Perempuan                          
                        </div>
                        <div class="form-double">
                            <label class="col-sm-2 control-label"> Alamat Email </label>
                            <div class="col-sm-10">
                                <input type="text" id="form-contact-name" name="form-name" placeholder="Your name" class="form-control" required="required">
                                <input type="email" id="form-email" name="form-email" class="form-control" placeholder="E-mail address" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2">Kabupaten</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option value="Kab. Bengkayang">Kab. Bengkayang</option>
                                    <option value="Kab. Kapuas Hulu">Kab. Kapuas Hulu</option>
                                    <option value="Kab. Kayong Utara"> Kab. Kakyong Utara </option>
                                    <option value="Kab. Ketapang"> Kab. Ketapang </option>
                                    <option value="Kab. Kubu Raya"> Kab. Kubu Raya </option>
                                    <option value="Kab. Landak"> Kab. Landak </option>
                                    <option value="Kab. Melawi"> Kab. Melawi </option>
                                    <option value="Kab. Mempawah"> Kab. Mempawah</option>
                                    <option value="Kab. Sambas"> Kab. Sambas</option>
                                    <option value="Kab. Sanggau"> Kab. Sanggau </option>
                                    <option value="Kab. Sekadau"> Kab. Sekadau </option>
                                    <option value="Kab. Sintang"> Kab. Sintang </option>
                                    <option value="Kota Pontianak"> Kota Pontianak</option>
                                    <option value="Kota Singkawanng"> Kota Singkawang</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2">Kota</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option value="Nagabang"> Ngabang </option>
                                    <option value="Pontianak"> Pontianak </option>
                                    <option value="Singkawang"> Singkawang </option>
                                    <option value="Bengkayang"> Bengkayang </option>
                                    <option value="Ketapang"> Ketapang </option>
                                    <option value="Sambas"> Sambas </option>
                                    <option value="Putusibau"> Putusibau </option>
                                    <option value="Sanggau"> Sanggau </option>
                                    <option value="Sintang"> Sintang </option>
                                    <option value="Kayong"> Kayong </option>
                                    <option value="Malawi"> Melawi </option>
                                    <option value="Kubu"> Kubu </option>
                                    <option value="Sekadau"> Sekadau </option>
                                    <option value="Mempawah"> Mempawah </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Perguruan Tinggi </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Perguruan Tinggi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Jurusan </label>
                            <div class="col-sm-10">              
                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                            <button type="submit" class="button">Submit</button>
                            <button type="submit" class="button">Batal</button>
                            <button type="warning" class="button">hapus</button>
                    </form>
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
