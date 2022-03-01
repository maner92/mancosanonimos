<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuegos;

class VideojuegosC extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videojuego = Videojuegos::all();
        return view('videojuegos', ['videojuegos' =>$videojuego]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videojuego.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #En esta parte se crea la opcion de validar los datos
        $request->validate([
            'name'    => 'required',
            'email'   => ['required','email','unique:users'],
            'password'=> ['required','min:8']

        ]);
        Videojuegos::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $videojuego=Videojuegos::find($id);
        return view('videojuegos.created', compact('videojuego'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videojuego = Videojuegos::find($id);
        $videojuego->delete();

        return back();#Metodo para regresar a vista anterior
    }
}
