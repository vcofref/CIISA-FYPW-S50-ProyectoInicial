@extends('layouts.master')
@section('title','Contacto')

@section('header')
    <h2>Index Verduras</h2>
@stop

@section('content')

<form method="POST" action="{{ url('/verdurasGuardar') }}">
  <div class="mb-3">
    <label for="nombre" class="form-label">nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">precio</label>
    <input type="text" class="form-control" id="precio" name="precio">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<hr>

<a href="{{ route('AgregarVerduras') }}">Agregar</a>
<a href="{{ route('EliminarVerduras') }}">Eliminar</a>

@stop

@section('footer')
    @parent
    <h4>Creado por Victor</h4>
@stop