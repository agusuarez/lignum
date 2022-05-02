@extends('layouts.plantillabase');

@section('contenido')
<h2>Crear peliculas</h2>
<form action="/peliculas" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input type="number" class="form-control" id="año" name="año" min="1800" max="2022">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo">
  </div>
  <div class="mb-3 form-check">
  <label for="" class="form-label">Duracion (minutos)</label>
    <input type="number" class="form-control" id="duracion" name="duracion">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sinopsis</label>
    <input type="text" class="form-control" id="sinopsis" name="sinopsis">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen">
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Actor Principal ID</label>
    <input type="number" class="form-control" id="actorprincipalid" name="actorprincipalid">
  </div>
  <a href="/peliculas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection