@extends('layouts.cliente')

@section('main')

<div class="container-fluid">
    <div class="col-2"></div>
    <div class="col-8">
        <h3 style="margin-left:50%;">Hola {{$usuario->name}}!</h3>
        @if(isset($msg))
        <h4>{{$msg}}</h4>
        @endif
        <img class="animate__animated animate__fadeIn" src="image\26167969_170973520325462_3262992718906276158_n.png" alt="consultorio" width="400" height="200" style="margin-left:50%;">
    </div>
    <div class="col-2"></div>


    </div>

@endsection