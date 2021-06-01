
@extends('layouts.cliente')


@section('main')
<div class="container-fluid">
<br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <x-auth-validation-errors class="mb-4" :errors="$errors" />
      <x-success-message class="mb-4"></x-success-message>
     
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Preguntas</label>
          <select name="especialidad" class="form-select" aria-label="Default select example" id="selectPregunta">
            @foreach($preguntas as $pregunta)
              <option value="{{$pregunta->id}}">{{$pregunta->pregunta}}</option>
          @endforeach
        </select>
        </div>
        <div style="text-align:center">
        <button onclick="ayuda()" class="btn btn-success" id="botonAgendar">Solicitar Ayuda</button>
        </div><br>
        <div style="text-align:center;display:none" id="mensajeListo">
          <p>Nos contactaremos a la brevedad con usted al número <b>{{$usuario->telefono}}</b>.</p>
          <p>De no atender, nos comunicaremos al correo <b>{{$usuario->email}}</b>.</p>
        </div>
       

    </div>
    <div class="col-2"></div>
  </div>
</div>

@endsection
<script>
  function ayuda(){
    document.getElementById("selectPregunta").disabled = true;
    document.getElementById("botonAgendar").disabled = true;
    document.getElementById("mensajeListo").style.display = "block";
  }
</script>