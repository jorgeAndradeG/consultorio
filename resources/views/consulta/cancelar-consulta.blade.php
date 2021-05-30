@extends('layouts.cliente')

@section('main')

<div class="container-fluid">
<br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        @if(isset($msg))
        <h4 style="color:red;text-align:center;">{{$msg}}</h4>
        @endif
      <form method="POST"  action="{{action('App\Http\Controllers\CancelarConsultaController@eliminar')}}"">
      @csrf
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Consulta</label>
                <select name="consulta" class="form-select" aria-label="Default select example">
                    @foreach($consultas as $consulta)
                    @foreach($medicos as $medico)
                        @if($medico->id == $consulta->id_u_r)
                            <option value="{{$consulta->id}}">{{$consulta->hora}} con el doctor {{$medico->name}}</option>
                        @endif
                    @endforeach

                @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Ingresar contraseña para cancelar la hora</label>
                    <input id="password2" class="form-control" type="password" name="password" required  />
                </div>

                
                <button type="submit" class="btn btn-success" id="botonAceptar">Cancelar Hora</button>
                </form>
    </div>
    <div class="col-2"></div>
    </div>
    </div>

@endsection