@extends('layout.menu')
@section('title','Anggota Penghuni')
@section('content')

<p> menghubungkan data dengan view</p>

        @foreach {$user as $users}

            <li>{{ $user->username }}<li>
            <li>{{ $user->password }}</li>
            
        @endforeach


@endsection