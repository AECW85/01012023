@extends('layout.master')
@section('judul')
Halaman Tambah Film
@endsection

@section('content')
<form  action="/film"  method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label >Judul</label> <br> <br>
    <input type="text" class="form-control"  name="judul">
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label>Ringkasan</label> <br> <br>
    <textarea name="ringkasan" cols=100 rows="10"></textarea>
    @error('ringkasan')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label>Tahun</label> <br> <br>
    <input type="number" class="form-control" name="tahun" >
    @error('tahun')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label >Poster</label> <br> <br>
    <input type="file" class="form-control"  name="poster">
    @error('poster')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label >Genre</label> <br> <br>
    <select name='genre_id' class="form-control" id='' >
    <option value= "">--silakan pilih--</option>
    @forelse($genre as $item )
     <option value= "{{$item->id}}"> {{$item->nama}} </option>
     @empty
     <option value= "">Data Kosong</option>
    @endforelse
    </select>
    @error('genre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</form>
@endsection