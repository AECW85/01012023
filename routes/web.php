<?php

use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\AuthController;
 use App\Http\Controllers\IndexController;
 use App\Http\Controllers\DataController;
 use App\Http\Controllers\CastController;
 use App\Http\Controllers\FilmController;
 use App\Http\Controllers\GenreController;
 use App\Http\Controllers\GameController;
 use App\Http\Controllers\PlatformController;
 use App\Http\Controllers\KritikController;
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

Route::group(['middleware' => ['auth']], function () {

    route::get('/cast/create',[CastController::class,'create'] );
route::post('/cast',[CastController::class,'store']);
route::put('/cast/{cast_id}',[CastController::class,'update'] );
route::get('/cast/{cast_id}/edit',[CastController::class,'edit'] );
route::delete('/cast/{cast_id}',[CastController::class,'destroy'] );
//route::get('/film/create',[FilmController::class,'create'] );
route::get('/genre/create',[GenreController::class,'create'] );
route::get('/genre',[GenreController::class,'index']);
route::post('/genre',[GenreController::class,'store']);
route::delete('/genre/{genre_id}',[GenreController::class,'destroy'] );
route::get('/genre/{genre_id}/edit',[GenreController::class,'edit'] );
route::put('/genre/{genre_id}',[GenreController::class,'update'] );
route::post('/kritik/{film_id}',[KritikController::class,'store']);
});


route::get('/cast',[CastController::class,'index'] );
route::get('/cast/{cast_id}',[CastController::class,'show'] );
route::get('/genre',[GenreController::class,'index']);
route::get('/genre/{genre_id}',[GenreController::class,'show'] );




Route::resource('film', FilmController::class);
Auth::routes();

Route::resource('game', GameController::class);
Route::resource('platform', PlatformController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
