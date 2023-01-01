<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function Datatable()
    {
        return view('pages.data-table');
    }

}
