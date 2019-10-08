@extends('layout.menu')
@section('title','data Admin')
@section('content')


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
    @foreach($admins as $admin)
        <tr class="bg-success">
            <td> {{$admin->id}} </td>
            <td> {{$admin->username}} </td>
            <td> {{$admin->password}} </td>
    @endforeach
        </tr>
    </tbody>
    </table>
</div>
</div>
</section>
@endsection
  
