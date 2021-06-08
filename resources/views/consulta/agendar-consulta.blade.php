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
      <x-horayfecha-message class="mb-4"></x-horayfecha-message>
      <form method="POST"  action="{{action('App\Http\Controllers\ConsultaController@store')}}"">
      @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Especialidad</label>
          <select name="especialidad" class="form-select" aria-label="Default select example">
            @foreach($especialidades as $especialidad)
              <option value="{{$especialidad->id}}">{{$especialidad->nom_especialidad}}</option>
          @endforeach
        </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Médico</label>
          <select name="medico" class="form-select" aria-label="Default select example">
            @foreach($medicos as $medico)
              <option value="{{$medico->id}}">{{$medico->name}}</option>
          @endforeach
        </select>
        </div>
        <div class="mb-3">
          <label for="fecha" class="form-label">Fecha de Consulta</label>
          <input id="fecha" class="form-control" type="date" name="fecha" min="2021-06-10" max="2022-06-11" required autofocus />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Hora</label>
          <select name="hora" class="form-select" aria-label="Default select example">
            <option value="09:00:00">09:00</option>
            <option value="10:00:00">10:00</option>
            <option value="11:00:00">11:00</option>
            <option value="12:00:00">12:00</option>
            <option value="14:00:00">14:00</option>
            <option value="15:00:00">15:00</option>
        </select>
        </div>  
        <div class="mb-3">
          <button type="button" class="btn btn-warning" onclick="valor({{$prevision}})">Calcular Valor</button>
        </div>
        <div class="mb-3" id="valor" style="display:none">
          <label for="exampleInputEmail1" class="form-label">Valor</label>
          <input class="form-control" type="text" id="valorConsulta" disabled/>
          <p>Se aplicó un descuento del <b>{{$prevision->descuento}}%</b> gracias a su previsión <b>{{$prevision->nom_convenio}}</b>
          <br><i>Valor sin descuento de $30.000</i></p>
          
        </div>
        <input type="hidden" id="precioConsulta" name="precioConsulta" value="" />

        <div style="text-align:center">
        <button type="submit" class="btn btn-success" id="botonAceptar" disabled>Agendar</button>

        </div>
      </form>

    </div>
    <div class="col-2"></div>
  </div>
</div>
</div>
@endsection
<script>

  function valor(prevision){
    
      document.getElementById("botonAceptar").disabled = false;
    if(document.getElementById("valor").style.display == "none"){
      document.getElementById("valor").style.display = "block";
      var valor = 30000 * prevision.descuento;
      valor = valor/100;
      valor = 30000 - valor;
      document.getElementById("valorConsulta").value = "$" + valor;
      document.getElementById("precioConsulta").value = valor;
    }
    
    else{
      document.getElementById("valor").style.display = "none";
      
    }
  }
</script>