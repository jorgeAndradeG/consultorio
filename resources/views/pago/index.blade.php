@extends('layouts.cliente')
@section('main')
<div class="animate__animated animate__fadeIn">
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-center">box</th>
                                <th class="py-3 px-6 text-center">Fecha</th>
                                <th class="py-3 px-6 text-center">Hora</th>
                                <th class="py-3 px-6 text-center">Valor</th>
                                <th class="py-3 px-6 text-center">Paciente</th>
                                <th class="py-3 px-6 text-center">Doctor</th>
                                <th class="py-3 px-6 text-center">estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody class="text-gray-600 text-sm font-light">
                            @forelse ($pagos as $pago)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <span class="font-medium">{{isset($pago->box)?$pago->box:'Box no asignado'}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <span class="font-medium">{{isset($pago->fecha)?$pago->fecha:'Fecha no asignada'}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <span class="font-medium">{{isset($pago->hora)?$pago->hora:'Hora no asignada'}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <span class="font-medium">${{isset($pago->valor)?$pago->valor:'Precio no asignado'}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <span class="font-medium">{{isset($pago->nombre)?$pago->nombre:'Sin nombre'}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <span class="font-medium">{{isset($pago->nombreDoc)?$pago->nombreDoc:'Sin nombre'}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            @if ($pago->pagado==0)
                                                <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">No pagado</span>
                                            @else
                                                <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Pagado</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                                                <a href="{{url('/pago/'.$pago->id.'/edit')}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                    </svg>
                                                </a>
                                            </div>                                            
                                        </div>
                                    </td>
                                </tr>                
                            @empty
                            <tr>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <span>Aun no hay consultas</span>
                                    </div>                                
                                </td>
                            </tr>                            
                            @endforelse                               
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection