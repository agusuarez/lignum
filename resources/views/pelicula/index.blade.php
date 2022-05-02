@extends('layouts.plantillabase');

@section('contenido')
<a href="peliculas/create" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Año</th>
            <th scope="col">Titulo</th>
            <th scope="col">Duracion</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Imagen</th>
            <th scope="col">ActorPrincipalID</th>
        </tr>    
    </thead>
    <tbody>
        @foreach($peliculas as $pelicula)
        <tr> 
            <td>{{$pelicula->id}}</td>
            <td>{{$pelicula->Año}}</td>
            <td>{{$pelicula->Titulo}}</td>
            <td>{{$pelicula->Duracion}}</td>
            <td>{{$pelicula->Sinopsis}}</td>
            <td><img src="{{asset($pelicula->Imagen)}}" alt="{{$pelicula->Imagen}}" class="img-fluid img-thumbnail" width="50px"></td>
            <td>{{$pelicula->ActorPrincipalID}}</td>
            <td>
                <form action="{{route ('peliculas.destroy', $pelicula->id)}}" method="POST">
                <a href="/peliculas/{{$pelicula->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection