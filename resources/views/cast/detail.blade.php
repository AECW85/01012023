@extends('layout.master')
@section('judul')
Halaman Detail Cast
@endsection

@section('content')

<h3>Nama:</h3><p> {{$cast->nama}}</p>
<h3>Umur:</h3><p> {{$cast->umur}}</p>
<h3>Biodata:</h3><p>{{$cast->bio}}</p>

@endsection