<?php

use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\AuthController;
 use App\Http\Controllers\IndexController;
 use App\Http\Controllers\DataController;
 use App\Http\Controllers\CastController;

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

route::get('/cast/create',[CastController::class,'create'] );
route::post('/cast',[CastController::class,'store']);
route::get('/cast',[CastController::class,'index'] );
route::get('/cast/{cast_id}',[CastController::class,'show'] );
route::put('/cast/{cast_id}',[CastController::class,'update'] );
route::get('/cast/{cast_id}/edit',[CastController::class,'edit'] );
route::delete('/cast/{cast_id}',[CastController::class,'destroy'] );