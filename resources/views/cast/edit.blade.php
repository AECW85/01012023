@extends('layout.master')
@section('judul')
Halaman Edit Cast
@endsection

@section('content')
<form  action="/cast/{{$cast->id}}"  method="POST">
@csrf
@method("put")
  <div class="form-group">
    <label >Nama</label> <br> <br>
    <input type="text" class="form-control" value="{{$cast->nama}}" name="nama">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label>Umur</label> <br> <br>
    <input type="number" class="form-control" value="{{$cast->umur}}" name="umur" >
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label >Bio</label> <br> <br>
    <textarea name="bio"  cols="30" rows="10" >{{$cast->bio}}</textarea>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</form>
@endsection