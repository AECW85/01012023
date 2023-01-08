@extends('layout.master')
@section('judul')
Halaman Tambah Cast
@endsection

@section('content')
<form  action="/cast"  method="POST">
@csrf
  <div class="form-group">
    <label >Nama</label> <br> <br>
    <input type="text" class="form-control"  name="nama">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label>Umur</label> <br> <br>
    <input type="number" class="form-control" name="umur" >
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label >Bio</label> <br> <br>
    <textarea name="bio"  cols="30" rows="10"></textarea>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</form>
@endsection