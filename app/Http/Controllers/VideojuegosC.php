<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuegos;
use App\Http\Requests\VideojuegoRequest;
use Illuminate\Support\Facades\Storage;


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

//Salvar
        $videojuego = Videojuegos::create([
            'videojuego'    => $request->input('videojuego'),
            'categoria'=>$request->input('categoria'),
            'plataforma'=> $request->input('plataforma'),
            'clasificacion'=>$request->input('clasificacion'),
            'precio'=> $request->input('precio'),
            'descripcion'   => $request->input('descripcion'),
        ]);
//Imagen
        if($request->file('image')){
            $videojuego->imagen = $request->file('image')->store('imagenes', 'public');
            $videojuego->save();
        }

        return redirect()->route('videojuegos.index')->with('status', 'Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videojuego = Videojuegos::find($id);
        
        return view('videojuego.videojuegomostrar', compact('videojuego'));
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
        if($request->file('image')){
            //Eliminar imagen
            
            Storage::disk('public')->delete($videojuego->imagen);
            $videojuego->imagen = $request->file('image')->store('imagenes', 'public');
            $videojuego->save();
        }
        return redirect()->route('videojuegos.index')->with('status', 'Registro Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videojuegos $videojuego)
    {
        Storage::disk('public')->delete($videojuego->imagen);
        $videojuego->delete();

        return redirect()->route('videojuegos.index')->with('status', 'Registro Eliminado con exito');#Metodo para regresar a vista anterior
    }
}
