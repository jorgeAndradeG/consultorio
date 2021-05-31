@extends('layouts.cliente')
@section('main')
<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">Box</th>
                            <th class="py-3 px-6 text-center">patologia</th>
                            <th class="py-3 px-6 text-center">Hora</th>
                            <th class="py-3 px-6 text-center">Valor</th>
                            <th class="py-3 px-6 text-center">Paciente</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @forelse ($consultas as $consulta)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center justify-center">
                                        <span class="font-medium">{{isset($consulta->box)?$consulta->box:'Box no asignado'}}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center justify-center">
                                        <span>{{isset($consulta->patologia)?$consulta->patologia:'No existe patologia'}}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <span>{{isset($consulta->hora)? $consulta->hora:'No existe hora'}}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <span>$ {{isset($consulta->valor)?$consulta->valor: 'No existe precio'}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <span>{{isset($consulta->name)?$consulta->name:'No existe nombre'}}</span>
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
        </div>
    </div>
</div>
@endsection