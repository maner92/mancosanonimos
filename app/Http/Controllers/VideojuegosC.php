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
        $videojuegos = Videojuegos::all();
        return view('videojuegos', compact('videojuegos'));
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
        $request->validate([
            'videojuego'    => ['required','unique:videojuego'],
            'categoria'=> ['required'],
            'plataforma'=> ['required'],
            'clasificacion'=> ['required'],
            'precio'=> ['required'],
            'descripcion'   => ['required', 'max:200'],
            'imagen'   => ['required|image|mimes:jpeg,png|max:3000']
        ]);
        Videojuegos::create([
            'videojuego'    => $request->input('videojuego'),
            'categoria'=> $request->input('categoria'),
            'plataforma'=> $request->input('plataforma'),
            'clasificacion'=> $request->input('clasificacion'),
            'precio_compra'=> $request->input('precio_compra'),
            'descripcion'   => $request->input('descripcion'),
            'imagen'=>$request->input('name')->file('file')->store('imagenes', 'public')
        ]);
        return redirect('videojuego')->with('status','Registro exitoso gracias');
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
        $videojuegos = Videojuegos::find($id);
        
        return view('videojuego.videojuegosmodificar', compact('videojuegos'));
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
        $videojuego = Videojuegos::find($id);
        
        $videojuego->update($request->all());
        return redirect('videojuego')->with('status', 'Registro Modificado con exito');
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

        return redirect('videojuego')->with('status', 'Registro Eliminado con exito');#Metodo para regresar a vista anterior
    }
}
