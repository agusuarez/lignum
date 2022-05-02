@extends('layouts.plantillabase')

@section('contenido')
<h2>Editar Actor</h2>
<form action="/actores/{{$actor->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$actor->nombre}}">
  </div>
  <div class="mb-3 form-check">
  <label for="" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" value="{{$actor->fechanacimiento}}">
  </div>
  <a href="/actores" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection