<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    public function create()
    {
        return view('cast.add');
    }

    public function index()
    {
        $cast=Cast::all();
        return view('cast.tampil',['cast'=>$cast]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|integer',
            'bio' => 'required|max:500',
            ]);
        $data_cast = Cast::create([
                'nama' => $request->nama,
                'umur' => $request->umur,
                'bio' => $request->bio,
            ]);


        return redirect('/cast');

    }

    public function show($id)
    {
        $cast=Cast::find($id);
        return view('cast.detail',['cast'=>$cast ]);
    }

    public function edit($id)
    {
        $cast=Cast::find($id);
        return view('cast.edit',['cast'=>$cast ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|integer',
            'bio' => 'required|max:500',
            ]);

            $cast=Cast::find($id);
            $cast->nama=$request->nama;
            $cast->umur=$request->umur;
            $cast->bio=$request->bio;
            $cast->save();

            return redirect('/cast');
    }


    public function destroy($id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect('/cast');
    }


}
