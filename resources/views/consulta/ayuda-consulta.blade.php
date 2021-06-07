
@extends('layouts.cliente')


@section('main')
<div class="container-fluid">
<br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <x-auth-validation-errors class="mb-4" :errors="$errors" />
      @if (session('message'))
      <div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 my-5 mb-4">
          <div
              class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
              <span class="text-green-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
              </span>
          </div>
          <div class="alert-content ml-4">
              <div class="alert-title font-semibold text-lg text-green-800">
                  {{ session('message') }}
              </div>
              <div class="alert-description text-sm text-green-600">
                <span>Nos contactaremos a la brevedad con usted al número <b>{{isset($usuario->telefono)?$usuario->telefono:'959484113'}}</b>.</span><br>
                <span>De no atender, nos comunicaremos al correo <b>{{$usuario->email}}</b>.</span>
              </div>
          </div>
      </div>
      @endif
     <form action="{{action('App\Http\Controllers\AyudaController@store')}}" method="POST">
       @csrf

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Preguntas</label>
        <select  class="form-select" aria-label="Default select example" id="selectPregunta" name="motivo">
          @foreach($preguntas as $pregunta)
            <option value="{{$pregunta->pregunta}}">{{$pregunta->pregunta}}</option>
        @endforeach
      </select>
      </div>
      <div style="text-align:center">
      <button type="submit" class="btn btn-success" id="botonAgendar">Solicitar Ayuda</button>
      </div>
     </form>
    </div>
    <div class="col-2"></div>
  </div>
</div>

@endsection