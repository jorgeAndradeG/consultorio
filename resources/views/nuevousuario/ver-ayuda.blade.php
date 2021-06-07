@extends('layouts.cliente')
@section('main')
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

                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">  
                        @forelse ($ayudas as $ayuda)
                        <tr>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{$ayuda->id}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{$ayuda->motivo}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{$ayuda->name}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{$ayuda->created_at}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{$ayuda->email}}</span>
                                </div>                                
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{$ayuda->telefono}}</span>
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
@endsection