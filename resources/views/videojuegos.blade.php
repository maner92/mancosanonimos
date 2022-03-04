@extends('layouts.app')

@section('content')
        <!--Creacion de tablas-->
        <div class="container"><!--crear contenedor-->
            <div class="row"><!--crear filas-->
                <div class="col-sm-8 mx-auto"><!--crear columnas-->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Videojuego</th>
                                <th>Categoria</th>
                                <th>Plataforma</th>
                                <th>Clasificacion</th>
                                <th>Precio</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th><a href="{{route('videojuegos.create')}}" class="btn btn-sm btn-primary">Agregar</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($videojuegos as $videojuego)
                            <tr>
                                <td>{{$videojuego->videojuego}}</td>
                                <td>{{$videojuego->categoria}}</td>
                                <td>{{$videojuego->plataforma}}</td>
                                <td>{{$videojuego->clasificacion}}</td>
                                <td>{{$videojuego->precio}}</td>
                                <td>
                                    <a href="{{route('videojuegos.edit', $videojuego->id)}}" class="btn btn-sm float-rigth btn-warning">Modificar</a>
                                </td>
                                <td>
                                    <form action="{{route('videojuegos.destroy',$videojuego->id)}}" method="POST"><!--Llamamos al metodo de delete posterior mente crado en el archivo web.php-->
                                        @method('DELETE')
                                        @csrf
                                        <input
                                        type="submit"
                                        value="Eliminar"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Desea eliminar?')">
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection