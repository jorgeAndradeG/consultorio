@extends('layouts.cliente')

@section('main')
<div class="animate__animated animate__fadeIn">
<div class="container-fluid">
<br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-success-message class="mb-4"></x-success-message>
    <form method="POST"  action="{{action('App\Http\Controllers\NuevoUsuarioController@store')}}">
      @csrf
        <div class="mb-3">
          <label for="rut" class="form-label">Rut</label>
          <input id="rut" class="form-control" type="text" name="rut" required autofocus />
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input id="name" class="form-control" type="text" name="name" required  />
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input id="correo" class="form-control" type="mail" name="email" required  />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input id="password" class="form-control" type="password" name="password" required  />
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
          <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required  />
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Especialidad (Solo si es médico)</label>
            <select name="especialidad" class="form-select" aria-label="Default select example">
              @foreach($especialidades as $especialidad)
                  <option value="{{$especialidad->id_e}}">{{$especialidad->nom_especialidad}}</option>
              @endforeach
              <option value="" selected>No aplica</option>
          </select>
        </div>  

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Rol</label>
          <select name="rol" class="form-select" aria-label="Default select example">
            @foreach($roles as $rol)
                <option value="{{$rol->id_r}}">{{$rol->nombre}}</option>
            @endforeach
          </select>
        </div>  
  
        <br>
        <div style="text-align:center">
        <button type="submit" class="btn btn-success">Agregar</button>
        </div>
        
      </form>

      </div>
    <div class="col-2"></div>
  </div>
</div>
</div>
<script src="js\jquery.js"></script>
<script src="inputmask\dist\jquery.inputmask.js"></script>
<script>
  $(document).ready(function(){
    var rut = document.getElementById("rut");
    $(rut).inputmask({
        mask: '9{1,2}.9{3}.9{3}-(K|k|9)',
        casing: 'upper',
        clearIncomplete: true,
        numericInput: true,
        positionCaretOnClick: 'none'
    });
  });
  
</script>
@endsection