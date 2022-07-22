@extends('layouts.master')
@section('title','Contacto')

@section('header')
    <h2>Index Verduras</h2>
@stop

@section('content')

@foreach($verduras as $verdura)
        <p>{{ $verdura }}</p>
@endforeach

<hr>

<a href="{{ route('AgregarVerduras') }}">Agregar</a>
<a href="{{ route('EliminarVerduras') }}">Eliminar</a>

@stop

@section('footer')
    @parent
    <h4>Creado por Victor</h4>
@stop