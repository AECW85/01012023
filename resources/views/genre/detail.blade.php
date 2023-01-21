@extends('layout.master')
@section('judul')
Halaman Detail Genre
@endsection

@section('content')
          <b><h3>{{ $genre->nama }}</h3></b>
          <a href="/genre" class="btn btn-secondary" btn-block btn-sm>Back</a>

          <div class="row">

@forelse ($genre->film as $item)
<div class="col-4">
    <div class="card" ">
        <img src="{{ asset('images/' . $item->poster) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <b><h3>{{ $item->judul }}</h3></b>
          <p class="card-text">{{ Str::limit($item->ringkasan,50) }}</p>
          <a href="/film/{{ $item->id }}" class="btn btn-secondary btn-block btn-sm" btn-block btn-sm>Read me</a>

        </div>
      </div>
</div>
@empty

@endforelse

          </div>

@endsection
