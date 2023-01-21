@extends('layout.master')
@section('judul')
Halaman Tambah Genre
@endsection

@section('content')
<form  action="/genre"  method="POST">
@csrf
  <div class="form-group">
    <label >Nama</label> <br> <br>
    <input type="text" class="form-control"  name="nama">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</form>
@endsection