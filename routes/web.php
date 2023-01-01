<?php

use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\AuthController;
 use App\Http\Controllers\IndexController;
 use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





 Route::get('/', [IndexController::class,'Home']);
 Route::get('/register', [AuthController::class,'Register']);
 Route::get('/welcome', [AuthController::class,'Welcome']);
 Route::post('/submit', [AuthController::class,'Submit']);

//  route::get('/master', function()
//  {
//     return view('layout.master');
//  });

route::get('/data-tables',[DataController::class,'Datatable'] );