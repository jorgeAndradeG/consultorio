
@extends('layouts.cliente')
@section('main')

<div class="animate__animated animate__fadeIn">
<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen flex items-top justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">Id</th>
                            <th class="py-3 px-6 text-center">Motivo</th>
                            <th class="py-3 px-6 text-center">Nombre</th>
                            <th class="py-3 px-6 text-center">Fecha de creacion</th>
                            <th class="py-3 px-6 text-center">Email</th>
                            <th class="py-3 px-6 text-center">Telefono</th>
                            <th class="py-3 px-6 text-center">Archivar</th>

                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">  
                        @forelse ($ayudas as $ayuda)
                        <tr>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{isset($ayuda->id)?$ayuda->id:'Sin id'}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{isset($ayuda->motivo)?$ayuda->motivo:'No existe motivo'}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{isset($ayuda->name)?$ayuda->name:'No cuenta con nombre'}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{isset($ayuda->created_at)?$ayuda->created_at:'No hay fecha de creacion'}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{isset($ayuda->email)?$ayuda->email:'No cuenta con email'}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{isset($ayuda->telefono)?$ayuda->telefono:'no cuenta con numero de telefono'}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                </div>                                
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>Aun no cuenta con consultas</span>
                                </div>                                
                            </td>
                        </tr>
                        @endforelse                                         
                    </tbody>
                </table>
            </div>
            <div>
                {{$ayudas->links()}}
            </div>            
        </div>
    </div>
</div>
</div>
@endsection