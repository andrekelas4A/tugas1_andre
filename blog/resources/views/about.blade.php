@extends('layouts.main')


@section('container')
    <h1 id="tes">HALAMAN ABOUT</h1>
    <h3>{{ $name }}</h3>
    <h3>{{ $email }}</h3>
    <img src="img/{{$image}}" alt="tidak ada gambar" width="200" class="img-thumbnail rounded-circle">
@endsection