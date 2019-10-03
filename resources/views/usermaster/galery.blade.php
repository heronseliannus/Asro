@extends('layout.menu')
@section('title','Daftar Mahasiswa Provinsi Kalimantan Barat')
@section('content')

<footer class="footer-area relative sky-bg" id="register">
    <!-- <div class="absolute footer-bg"> </div> -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col sm-offset-3 text-center">
                    <div class="page-title">
                        <h3> Isi Data Mahasiswa </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <form action="#" class="form-control" method="#" id="#">
                            <div class="form-control">
                                <input type="text" flaceheolder="Nama Lengkap">
                            </div>
                            <div class="form-control">
                                <input type="text" flaceheolder="Alamat Lengkap">
                            </div>
                            <div class="form-control" flacheolder="email">
                                <input type="text" flaceholder="Email">
                            </div>
                            <div class="form-control">
                                <input type="text" flaceholder="Masukan Email Anda">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="Kab.Bengkayang">Kab. Bengkayang</option>
                                    <option value="Kab. Kapuas Hulu">Kab. Kapuas Hulu</option>
                                    <option value="Kab. Kayong Utara"> Kab. Kkakyong Utara </option>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection