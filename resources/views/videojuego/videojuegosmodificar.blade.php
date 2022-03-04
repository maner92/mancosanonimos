@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="flex justify-center items-center py-4">
        <div >
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">¡Éxito!</p>
                    <p class="text-sm">{{ session('status') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('Modificar VideoJuego') }}</div>
              <div class="card-body">
                <form action="{{ route('videojuegos.update', $videojuegos->id) }}" method="POST" ectype="multipart/form-data"> 
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label class="form-label">Nombre del Videojuego</label>
                      <input type="text" class="form-control" name="videojuego" value="{{ $videojuegos->videojuego }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Categoria</label>
                      <input type="text" class="form-control" name="categoria" value="{{ $videojuegos->categoria }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Plataforma</label>
                      <input type="text" class="form-control" name="plataforma" value="{{ $videojuegos->plataforma}}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Clasificacion</label>
                      <input type="text" class="form-control" name="clasificacion" value="{{ $videojuegos->clasificacion }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Precio</label>
                      <input type="double" class="form-control" name="precio" value="{{ $videojuegos->precio }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Imagen</label>
                      <input class="mb-3" type="file" name="imagen" value="{{ $videojuegos->imagen }}">
                    <div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection