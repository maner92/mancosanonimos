@extends('layouts.web')

@section('titulo_apartado')
Videojuegos - Nuevo
@endsection

@php
    $consola = ['XBOX' => 'Xbox',
                'PS' => 'Play Station',
                'PC' => 'PC',
                'Celular' => 'Celular'];
@endphp

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
    <form action="controlador.php" method="post">
      @foreach($videojuegos as $videojuego)
      <section class="form-registrar">
          <h4 style="text-align: center; color: red">Editar Usuario</h4>
          <label for="">Nombre:</label>
          <input class="control" type="name" name="" id="correo" placeholder="" required>
          <label for="">Contraseña:</label>
          <input class="control" type="password" name="txtcontra" id="contraseña" placeholder="<?php echo $_REQUEST['con'] ?>" required>
          <label for="">Perfil:</label>
          <select class="control" type="txt" name="txtperfil" required>
            <?php
  
            if($_REQUEST['pe'] == "Administrador"){
              $perfil = "Empleado";
            } else {
              $perfil = "Administrador";
            }
  
            echo "<option value=".$_REQUEST['pe'].">".$_REQUEST['pe']."</option>
            <option value='$perfil'>$perfil</option>";
            ?>
          </select>
          <input type="hidden" name="txtid" value="<?php echo $_REQUEST['id'] ?>">
          <input name="btnEditar" class="btn btn-outline-danger  btn-lg btn-block mt-4" type="submit" value="Actualizar Usuario">
      </section>
    </form>
    @endforeach
</div>
@endsection