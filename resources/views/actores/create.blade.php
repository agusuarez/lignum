@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR ACTOR</h2>
<form action="/actores" method="POST">
    @csrf
  
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3 form-check">
  <label for="" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento">
  </div>
  <a href="/actores" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection