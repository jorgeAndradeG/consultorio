@extends('layouts.cliente')
@section('main')
<div class="flex mb-4">
    <div class="w-1/3"></div>
    <div class="w-1/3 " >
        <div class="grid mt-8  gap-2 grid-cols-1">
            <div class="flex flex-col ">
                <div class="bg-white shadow-lg rounded-3xl p-5">                
                    <div class="mt-5">
                        <form action="{{url('/pago/'.$pago->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Box</abbr></label>
                                    <input  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 cursor-not-allowed" required="required" type="text" name="box" id="box" value="{{$pago->box}}" readonly>
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Fecha</label>
                                    <input  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 " required="required" type="date" name="fecha" id="fecha" value="{{$pago->fecha}}">
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Hora</label>
                                    <input  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 " required="required" type="time" name="hora" id="hora" value="{{$pago->hora}}">
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Pagado</label>
                                    <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 "  name="pagado" id="pagado" >
                                        @if ($pago->pagado ==0)
                                            <option value="0" selected>No pagado</option>
                                            <option value="1">pagado</option>
                                        @else
                                            <option value="0">No pagado</option>
                                            <option value="1" selected>pagado</option>
                                        @endif
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Precio total</abbr></label>
                                    <input  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 cursor-not-allowed" required="required" type="text" name="valor" id="valor" value="{{$pago->valor}}" readonly>
                                </div>
                            </div> 
                            <input type="hidden" name="id_u" value="{{$pago->id_u}}">
                            <input type="hidden" name="id_u_r" value="{{$pago->id_u_r}}">                         
                            <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">                                   
                                <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Guardar</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-1/3"></div>
  </div>
@endsection