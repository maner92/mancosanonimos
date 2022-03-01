<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VideojuegosController;
use App\Http\Controllers\VideojuegosC;

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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('/posts', PostController::class)
    ->middleware('auth')
    ->except('show');

Route::get('/home', [VideojuegosC::class, 'index'])->middleware('auth');

Route::resource('videojuego', VideojuegosC::class)->middleware('auth');


