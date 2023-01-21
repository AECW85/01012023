@extends('layout.master')
@section('judul')
Halaman Detail Film
@endsection

@section('content')
        <img src="{{ asset('images/' . $film->poster) }}" class="card-img-top" alt="...">
          <b><h3>{{ $film->judul }}</h3></b>
          <p class="card-text">{{ $film->ringkasan }}</p>
          <a href="/film" class="btn btn-secondary" btn-block btn-sm>Back</a>
<br>
@forelse ( $film->kritik as $item )
<div class="card">
  <div class="card-header">
    {{ $item->user->name }}
  </div>
  <div class="card-body">
    <h5>{{ $item->point }} point</h5>
    <p class="card-text">{{ $item->content }}</p>
  </div>
</div>
@empty
    <h4>tidak ada kritik</h4>
@endforelse

<br>
<div class="">
<form action="/kritik/{{ $film->id }}" method="POST">
@csrf

  <select name="point" class="form-control" id="">
    <option value="">Silakan input nilai</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>

  <textarea name="content" id="" class="form-control"  cols="30" rows="10" placeholder="isi kritik"></textarea>
  <br>
<input type="submit" class="btn btn-block btn-primary" value="kirim">
</form>
</div>
@endsection
