@extends('layouts.cliente')

@section('main')
    <div class="min-h-screen flex flex-col sm:justify-top items-center pt-6 sm:pt-0 from-gray-100 mt-20">
        <h1 class="text-5xl mb-10">Cancelar consulta</h1>
        <form method="POST" action="#">
            @csrf
            <!-- prevision -->
            <div>
                <x-label for="consulta" :value="__('Horas agendadas')" />

                <select id="consulta" class="block mt-1 w-full" name="consulta" >
                    @foreach ($consultas as $consulta)
                    <option value="{{$consulta->id}}">{{$consulta->box}}</option>
                    @endforeach 
                    <option value="" selected>Seleccionar</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <x-button class="ml-3 mt-4 hover:bg-green-600">
                {{ __('Confirmar') }}
            </x-button>
            
        </form>
    </div>
@endsection