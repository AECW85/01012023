<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function Register()
     {
         return view('pages.form');
     }

    // public function Welcome()
    // {
    //     return view('welcome');
    // }


    
    public function Submit(Request $request )
    {
      $firstname = $request['firstname'];
      $lastname = $request['lastname'];


      return view ('pages.welcome',[ "firstname"=> $firstname, "lastname"=> $lastname  ]);
    }
}
