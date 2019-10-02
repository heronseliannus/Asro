@extends('layout.menu')
@section('title','Anggota Penghuni')
@section('content')


<section class="section-padding gray-bg" id="blog-page">
    <div class="container">
        <div class="row">
            <div class ="title text-center"><h4>menghubungkan data dengan view</h4></div>
            <table class="table">
                <thead>
                <tr class="bg-warning">
                    <th scope="col"> Id </th>
                    <th scope="col"> Username </th>
                    <th scope="col"> Password </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-success">
                    <th scope="col">1</th>
                    <th scope="col">Jow Hanter</th>
                    <th scope="col">jowhanter</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <th> {{$user->username }} </th>
                    <th> {{$user->password}}</th>
                <tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection