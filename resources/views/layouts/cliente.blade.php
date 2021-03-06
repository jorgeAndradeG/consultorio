<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="image\26167969_170973520325462_3262992718906276158_n.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    <title>Consultorio</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/homeLogin">Consultorio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        @if($usuario->id_r == 1)
        <a class="nav-link" href="/newUser">Agregar Usuario</a>
        <a class="nav-link" href="/verAyuda">Ver ayuda</a>
        @elseif($usuario->id_r == 2)
        <a class="nav-link" href="/verConsultas">Ver Consultas</a>
        @elseif($usuario->id_r == 3)
        <a class="nav-link" aria-current="page" href="/agendar">Agendar Hora</a>
        <a class="nav-link" href="/cancelar">Cancelar Hora</a>
        <a class="nav-link" href="/ayuda">Ayuda con Ejecutivo</a>
        @elseif($usuario->id_r == 4)
        <a class="nav-link" href="{{url('/pago')}}">Pagar consulta</a>
        @endif
            
        </div>
        </div>
              
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Cerrar Sesi??n') }}
            </x-dropdown-link>
         </form>
    </div>
    </nav>
</div>

    @section('main')
    @show
<div class="p-4 bg-white text-gray-800 flex justify-between">
        <!--- izquierda--->
        <div>
            
        </div>
        <!--- derecha--->
        <div class="flex items-center">
            Copyright &copy; consultorio j&j 2021 
        </div>
 </div>    
</body>
</html>