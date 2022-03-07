@extends('videojuego.navbar')

@section('title','Contactanos')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contactanos</div>

                <div class="card-body">

                    <form action="{{ route('contactanos.store')}}" method="POST">
                        @csrf
                        <div class="mt-2 form-group">
                            <label>Nombre*</label>
                            <input type="text" name="nombre" class="form-control" >
                        </div>
                        @error('nombre')
                            <p><strong>{{$message}}</strong></p>
                        @enderror
                        <div class=" mt-2 form-group">
                            <label>Correo*</label>
                            <input type="text" name="correo" class="form-control" >
                        </div>
                        @error('correo')
                            <p><strong>{{$message}}</strong></p>
                        @enderror
                        <div class=" mt-2 form-group">
                            <label>Mensaje*</label>
                            <textarea name="mensaje" rows="10" class="form-control"></textarea>
                        </div>
                        @error('mensaje')
                            <p><strong>{{$message}}</strong></p>
                        @enderror
                        <div class=" mt-3 form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                    @if (session('info'))
                        <script>
                            alert("{{session('info')}}");
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection