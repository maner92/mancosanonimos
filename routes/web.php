<?php

use App\Http\Controllers\ContactanosC;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VideojuegosC;



Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('/posts', PostController::class)
    ->middleware('auth');

Route::get('/home', [VideojuegosC::class, 'index'])->middleware('auth');

Route::resource('videojuegos', VideojuegosC::class)->middleware('auth');

Route::get('contactanos', [ContactanosC::class,'index'])->name('contactanos.index');

Route::post('contactanos',[ContactanosC::class,'store'])->name('contactanos.store');