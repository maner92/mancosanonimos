@extends('videojuego.navbar')

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
                    <div class="mt-2 form-group">
                        <label>Videojuego*</label>
                        <input type="text" name="videojuego" class="form-control" required>
                    </div>
                    <div class="mt-2 form-group">
                        <label>Categoria*</label>
                        <select name="categoria" class="form-control">
                            <option value="">Seleccione un opción</option>
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
                    <div class="mt-2 form-group">
                        <label>Plataforma*</label>
                        <select name="plataforma" class="form-control">
                            <option value="">Seleccione un opción</option>
                            <option value="Nintendo">Nintendo</option>
                            <option value="PC">PC</option>
                            <option value="Play Station">Play Station</option>
                            <option value="Xbox">Xbox</option>
                            <option value="Otro">Otro...</option>
                        </select>
                    </di>
                    <div class=" mt-2 form-group">
                        <label>Precio*</label>
                        <input type="number" name="precio" class="form-control" required>
                    </div>
                    <div class=" mt-2 form-group">
                        <label>Descripción*</label>
                        <textarea name="descripcion" rows="10" class="form-control"></textarea>
                    </div>
                    <div class=" mt-2 form-group">
                        <label>Clasificación*</label>
                        <select name="clasificacion" class="form-control">
                            <option value="">Seleccione un opción</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="B15">B15</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="mt-3 form-group">
                        <label>Imagen*</label>
                        <input type="file" name="image" required >
                    </div>
                    <div class=" mt-3 form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
