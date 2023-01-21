<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kritik;

class KritikController extends Controller
{
  public function store(Request $request, $id){

    $request->validate([
        'content' => 'required|string',
        'point' => 'required|integer',
        ]);
        $data_kritik = Kritik::create([
            'user_id' => Auth::id(),
            'film_id' => $id,
            'content' => $request->content,
            'point' => $request->point,
        ]);

        return redirect('/film/'. $id);
  }
}
