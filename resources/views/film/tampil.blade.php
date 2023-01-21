@extends('layout.master')
@section('judul')
Halaman Tampil Film
@endsection

@section('content')
@auth
<a href="/film/create" class="btn btn-primary my-2" >Add </a>
@endauth

<div class="row">
@forelse ($film as $item )
<div class='col-4'>
    <div class="card" ">
        <img src="{{ asset('images/' . $item->poster) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <b><h3>{{ $item->judul }}</h3></b>
    <small class="text-info">{{ $item->genre->nama }}</small>
          <p class="card-text">{{ Str::limit($item->ringkasan,50) }}</p>
          <a href="/film/{{ $item->id }}" class="btn btn-secondary btn-block btn-sm" btn-block btn-sm>Read me</a>
            <div class="row my-2" >
                @auth
                <div class="col">
                    <a href="/film/{{ $item->id }}/edit" class="btn btn-info btn-block btn-sm" btn-block btn-sm>Edit</a>
                </div>
                <div class="col">

                    <form action="film/{{ $item->id }}" method="POST">
                        @csrf
                        @method('delete')
                            <INput type="submit" class="btn btn-danger btn-block btn-sm" value="delete"></input>
                        </form>
                </div>
                @endauth

            </div>

        </div>
      </div>

</div>

@empty
    <h2>Tidak ada data Film</h2>
@endforelse

</div>


@endsection
