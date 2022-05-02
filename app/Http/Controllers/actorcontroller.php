<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actor;

class actorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actores = actor::all();
        return view('actores.index')->with('actores',$actores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actores = new actor();
        $actores->nombre = $request->get('nombre');
        $actores->fechanacimiento = $request->get('fechanacimiento');
        $actores->save();
        return redirect('/actores');
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
    $actores = actor::find($id);
    return view('actores.edit')->with('actor',$actores);
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
        {
            $actores = actor::find($id);
            $actores->nombre = $request->get('nombre');
            $actores->fechanacimiento = $request->get('fechanacimiento');
            $actores->save();
            return redirect('/actores');
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actores = actor::find($id);
        $actores->delete();
        return redirect('/actores');
    }
}
