@extends('layout.master')
@section('judul')
Halaman Tampil Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary my-2" >Add </a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($cast as $key => $item)
    <tr>
        <td>{{$key + 1}}
        </td>
        <td>{{$item->nama}}
        </td>
        {{-- <td>{{$item->umur}}
        </td>
        <td>{{$item->bio}}
        </td> --}}
        <td>
        <Form action="/cast/{{$item->id}}" method="POST" >
        @csrf
        @method('delete')
        <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm" >Detail </a>
        <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm" >Edit </a>
        <input type="submit" class="btn btn-danger btn-sm" value="delete" >
        </form>
        </td>
    </tr>
    @empty
    <tr>
    <td>Data masih kosong. Silakan tambahkan data</td>
    </tr>
    @endforelse

  </tbody>
</table>

@endsection