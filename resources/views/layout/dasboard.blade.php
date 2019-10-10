@extends('layout.menu')
@section('title', 'dasboard!!')

@section('content')

<section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/Makrab/Makrab 1.jpg" alt="">
                        </div>
                        <a href="#"><h4>Kelola data Mahasiswa</h4></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/Tari.jpg" alt="">
                        </div>
                        <a href="#"><h4>Kelola data Users</h4></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/Angkatan/kemah 1.jpg" alt="">
                        </div>
                        <a href="#"><h4>Kelola data Admin</h4></a>
                    </div>
                </div>
            </div>
        </div>
</section>


@endsection