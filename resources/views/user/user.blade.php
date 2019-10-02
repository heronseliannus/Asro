@extends('layout.menu')
@section('title','Anggota Penghuni')
@section('content')



        @foreach {$users as $user}

            <td>{{ $users->Username }}<td>
            <td>{{ $users->Password }}</td>
            
        @endforeach


@endsection