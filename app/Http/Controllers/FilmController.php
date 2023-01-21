<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
use File;

class FilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film=Film::get();
        return view('film.tampil',['film'=>$film]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre=Genre::get();
        return view('film.create',['genre'=>$genre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'ringkasan' => 'required',
            'tahun' => 'required|integer',
            'poster' => 'required|image|mimes:png,jpg',
            'genre_id' => 'required|integer',
            ]);

        $filename = time() .  $request->file('poster')->getClientOriginalName();
        $request->file('poster')->move(public_path('images'),$filename);


        $data = new Film;
        $data->judul = $request->judul;
        $data->ringkasan = $request->ringkasan;
        $data->tahun = $request->tahun;
        $data->poster = $filename;
        $data->genre_id = $request->genre_id;

        $data->save();

        return redirect('/film');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film=Film::find($id);
        return view('film.detail',['film'=>$film ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        $genre = Genre::get();
        return view('film.update',['film'=>$film , 'genre'=>$genre ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'ringkasan' => 'required',
            'tahun' => 'required|integer',
            'poster' => 'image|mimes:png,jpg',
            'genre_id' => 'required|integer',
            ]);

            $film=Film::find($id);
            if ($request-> has('poster'))
            {
                $path = 'images/';
                File::delete($path.$film->poster);
                $filename = time() . $request->file('poster')->getClientOriginalName();
                $request->file('poster')->move(public_path('images'),$filename);

                $film->poster = $filename;
                $film->save();
            }

            $film->judul=$request->judul;
            $film->ringkasan=$request->ringkasan;
            $film->tahun=$request->tahun;
            $film->genre_id=$request->genre_id;
            $film->save();

            return redirect('/film');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film=Film::find($id);
        $film->delete();

        return redirect('/film');
    }
}

