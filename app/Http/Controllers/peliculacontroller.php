<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelicula;


class peliculacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = pelicula::all();
        return view('pelicula.index')->with('peliculas',$peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peliculas = new pelicula();

       

        $peliculas->año = $request->get('año');
        $peliculas->titulo = $request->get('titulo');
        $peliculas->duracion = $request->get('duracion');
        $peliculas->sinopsis = $request->get('sinopsis');

        if ($request->hasfile('imagen')){
            $file = $request->file('imagen');
            $rutadestino = 'images/imagenes/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadsuccess = $request->file('imagen')-> move($rutadestino,$filename);
            $peliculas->imagen= $rutadestino . $filename;
        }

        $peliculas->actorprincipalid = $request->get('actorprincipalid');
        $peliculas->save();
        return redirect('/peliculas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peliculas = pelicula::find($id);
        return view('pelicula.edit')->with('pelicula',$peliculas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peliculas = pelicula::find($id);
        $peliculas->año = $request->get('año');
        $peliculas->titulo = $request->get('titulo');
        $peliculas->duracion = $request->get('duracion');
        $peliculas->sinopsis = $request->get('sinopsis');
        if ($request->hasfile('imagen')){
            $file = $request->file('imagen');
            $rutadestino = 'images/imagenes/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadsuccess = $request->file('imagen')-> move($rutadestino,$filename);
            $peliculas->imagen= $rutadestino . $filename;
        }
        $peliculas->actorprincipalid = $request->get('actorprincipalid');
        $peliculas->save();
        return redirect('/peliculas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peliculas = pelicula::find($id);
        $peliculas->delete();
        return redirect('/peliculas');
    }
}
