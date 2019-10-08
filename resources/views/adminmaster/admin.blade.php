@extends('layout.menu')
@section('title','data user')
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
    @foreach($users as $user)
        <tr class="bg-success">
            <td> {{$user->id}} </td>
            <td> {{$user->username}} </td>
            <td> {{$user->password}} </td>
    @endforeach
        </tr>
    </tbody>
    </table>
</div>
</div>
</section>
@endsection
  
