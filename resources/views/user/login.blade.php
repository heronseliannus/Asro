@extends('layout.menu')
@section('title','silahkan input data anda')
@section('content')

<footer class="footer-area relative sky-bg" id="register">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Register</h2>
                            <p>Input Registrasi Peserta Calon Penguni</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Gegerkalong Hilir No. 107 Kota Bandung, Jawab Barat <br />Indonesia</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">(022) 2005199</a> <br />
                                    <a href="callto:8801687420471">082-214-667-037</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">asro.kalbar.bandung@gmail.com</a> <br />
                                    <a href="mailto:youremail@example.com">heronselianus_1440244_piksi@yahoo.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="/users" class="contact-form" method="post" id="registration-form">
                            @csrf
                            <input type="text" id="form-username" name="form-username" class="form-control" placeholder="User Name">    
                            <input type="password" id="form-password" name="form-password" class="form-control" placeholder="Password">   
                            <!-- <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea> -->
                            <button type="submit" class="btn btn-success">Login</button>
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
@endsection