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

                    <form action="" method="Post" encrype="multipart/form-date">
                    <div class="form-group">
                        <label>Nombre*</label>
                        <input type="text" name="nombre" class="form-control" require >
                    </div>
                    <div class="form-group">
                        <label>Categoria*</label>
                        <input type="text" name="categoria" class="form-control" require >
                    </div>
                    <div class="form-group">
                        <label>Plataforma*</label>
                        <input type="text" name="plataforma" class="form-control" require >
                    </div>
                    <div class="form-group">
                        <label>Precio*</label>
                        <input type="text" name="nombre" class="form-control" require >
                    </div>
                    <div class="form-group">
                        <label>Clasificacion*</label>
                        <input type="text" name="nombre" class="form-control" require >
                    </div>
                    <div class="form-group">
                        <label>Precio*</label>
                        <input type="text" name="nombre" class="form-control" require >
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
