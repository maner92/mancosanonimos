<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contactanos;
use Illuminate\Support\Facades\Mail;

class ContactanosC extends Controller
{
    //
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $request->validate([
            'nombre'=> 'required',
            'correo'=> 'required|email',
            'mensaje'=> 'required',
        ]);
        $correo = new Contactanos($request->all());
        Mail::to('emrzrz1502@gmail.com')->send($correo);

    return redirect()->route('videojuegos.index')->with('info', 'Enviado');
    }
}
