@extends('layout.master')
@section('judul')
Halaman Tambah Genre
@endsection

@section('content')
<form  action="/genre/{{ $genre->id }}"  method="POST">
@csrf
@method("put")
  <div class="form-group">
    <label >Nama</label> <br> <br>
    <input type="text" class="form-control" value="{{$genre->nama}}" name="nama">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</form>
@endsection
