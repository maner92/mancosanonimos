@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Nuevo VideoJuego</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('videojuegos.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                    <div class="form-group">
                        <label>Videojuego*</label>
                        <input type="text" name="videojuego" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Categoria*</label>
                        <input type="text" name="categoria" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Plataforma*</label>
                        <input type="text" name="plataforma" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label>Precio*</label>
                        <input type="number" name="precio" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Descripcion*</label>
                        <input type="text" name="descripcion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Clasificacion*</label>
                        <input type="text" name="clasificacion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Imagen*</label>
                        <input type="file" name="imagen" required >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
