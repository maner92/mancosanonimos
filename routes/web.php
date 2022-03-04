<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VideojuegosC;

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('/posts', PostController::class)
    ->middleware('auth')
    ->except('show');

Route::get('/home', [VideojuegosC::class, 'index'])->middleware('auth');

Route::resource('videojuegos', VideojuegosC::class)->middleware('auth');


