@extends('videojuego.navbar')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if($videojuego->imagen)
                        <img src="/storage/{{ $videojuego->imagen }}" class="card-img-top" >
                    @endif
                    <div class="card-body">
                            <form action="{{ route('videojuegos.edit', $videojuego->id) }}" method="POST" ectype="multipart/form-data">
                                @csrf
                                <div>
                                    <div class="card-body">
                                        <h3 class="card-title" style="font-weight:bolder">{{ $videojuego->videojuego }}</h3>
                                            <h5 class="card-text" style="text-align: justify">{{$videojuego->descripcion}}</h5>
                                        <h4 class="card-text " style="font-weight:bolder ">Categoria</h4>
                                            <h5 class="card-text" >{{ $videojuego->categoria }}</h5>
                                            <h4 class="card-text" style="font-weight:bolder">Plataforma</h4>
                                            <h5 class="card-text">{{ $videojuego->plataforma}}</h5>
                                            <h4 class="card-text" style="font-weight:bolder">Clasificacion</h4>
                                            <h5 class="card-text">{{$videojuego->clasificacion}}</h5>
                                            <h4 class="card-text" style="font-weight:bolder">Precio</h4>
                                            <h5 class="card-text ">{{$videojuego->precio}}</h5>
                                            <h5 class="card-text"><small class="text-muted"><i>Updated: {{$videojuego->updated_at->format('d-M-Y')}}</i></small></h5>
                                </div>
                                <a href="{{route('videojuegos.edit', $videojuego->id)}}" class="btn btn-sm float-rigth btn-warning">Modificar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection