@extends('layout.menu')
@section('title','Data Mahasiswa Kalbar')


@section('content')


<p>halaman untuk menampilkan data</p>

<section class="section-padding gray-bg">
<div class="container">
<div class="row">
    <table class="table">
    <thead>
        <tr class="bg-warning">
            <th scope="col-sm-12">Id</th>
            <th scope="col-sm-12">Username</th>
            <th scope="col-sm-12">Password</th>
        </tr>
    </thead>
    <tbody>
    @foreach($datamhss as $datamhs)
        <tr class="bg-success">
            <td> {{$datamhs->id}} </td>
            <td> {{$datamhs->namalengkap}} </td>
            <td> {{$datamhs->alamat}} </td>
            <td> {{$datamhs->jenis_kelamin}} </td>
            <td> {{$datamhs->email}} </td>
            <td> {{$datamhs->re_email}} </td>
            <td> {{$datamhs->kabupaten}} </td>
            <td> {{$datamhs->kota}} </td>
            <td> {{$datamhs->perguruan_tinggi}} </td>
            <td> {{$datamhs->jurusan}} </td>
    @endforeach
        </tr>
    </tbody>
    </table>
</div>
</div>
</section>


@endsection