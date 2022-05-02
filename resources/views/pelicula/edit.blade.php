@extends('layouts.plantillabase')

@section('contenido')
<h2>Editar pelicula</h2>
<form action="/peliculas/{{$pelicula->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input type="number" class="form-control" id="año" name="año" min="1800" max="2022" value="{{$pelicula->año}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$pelicula->titulo}}">
  </div>
  <div class="mb-3 form-check">
  <label for="" class="form-label">Duracion (minutos)</label>
    <input type="number" class="form-control" id="duracion" name="duracion" value="{{$pelicula->duracion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sinopsis</label>
    <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="{{$pelicula->sinopsis}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen">
  </div>
  <label for="" class="form-label">Actor Principal ID</label>
    <input type="number" class="form-control" id="actorprincipalid" name="actorprincipalid" value="{{$pelicula->actorprincipalid}}">
  </div>
  <a href="/peliculas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection