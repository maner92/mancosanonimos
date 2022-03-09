@extends('videojuego.navbar')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Modificar VideoJuego</div>
              <div class="card-body">
                <form action="{{ route('videojuegos.update', $videojuegos->id)}}" method="POST" enctype="multipart/form-data">
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                  @endif
                  @csrf
                  @method('PUT')
                    <div class="mb-3">
                      <label class="form-label">Nombre del Videojuego</label>
                      <input type="text" class="form-control" name="videojuego" required value="{{ $videojuegos->videojuego }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Categoria</label>
                      <select name="categoria" class="form-control" required value="{{ $videojuegos->categoria }}">
                        <option value="Acción">Acción</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Deportivo">Deportivo</option>
                        <option value="Estrategia">Estrategia</option>
                        <option value="Moba">Moba</option>
                        <option value="RPG">RPG</option>
                        <option value="Shooter">Shooter</option>
                        <option value="Simulación">Simulación</option>
                    </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Plataforma</label>
                      <select name="plataforma" class="form-control" required value="{{ $videojuegos->plataforma}}">
                        <option value="Nintendo">Nintendo</option>
                        <option value="PC">PC</option>
                        <option value="Play Station">Play Station</option>
                        <option value="Xbox">Xbox</option>
                        <option value="Otro">Otro...</option>
                    </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Descripcion</label>
                      <textarea name="descripcion" rows="6" class="form-control">{{ $videojuegos->descripcion}}</textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Clasificacion</label>
                      <select name="clasificacion" class="form-control" required value="{{ $videojuegos->clasificacion }}">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="B15">B15</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Precio</label>
                      <input type="double" class="form-control" name="precio" required value="{{ $videojuegos->precio }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Imagen</label>
                      <input type="file" name="image">
                    <div>
                      <div class="form-group">
                        <button type="submit" value="actualizar" class="btn btn-warning">Guardar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection