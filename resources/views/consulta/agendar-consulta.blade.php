@extends('layouts.cliente')


@section('main')
<div class="container-fluid">
<br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        
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
          <input id="fecha" class="form-control" type="date" name="fecha" required autofocus />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Hora</label>
          <select name="especialidad" class="form-select" aria-label="Default select example">
            <option value="9">09:00</option>
            <option value="10">10:00</option>
            <option value="11">11:00</option>
            <option value="12">12:00</option>
            <option value="14">14:00</option>
        </select>
        </div>  
        <div class="mb-3">
          <button type="button" class="btn btn-warning" onclick="valor()">Calcular Valor</button>
        </div>
        <div class="mb-3" id="valor" style="display:none">
          <label for="exampleInputEmail1" class="form-label">Valor</label>
          <input class="form-control" type="text" value="$12000" disabled/>
        </div>

        <div style="text-align:center">
        <button type="submit" class="btn btn-success">Agendar</button>
        </div>
      </form>

    </div>
    <div class="col-2"></div>
  </div>
</div>

@endsection
<script>
  function valor(){
    if(document.getElementById("valor").style.display == "none"){
      document.getElementById("valor").style.display = "block";
    }
    else{
      document.getElementById("valor").style.display = "none";
    }
  }
</script>