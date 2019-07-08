<?php

namespace App\Http\Controllers;

use App\Modules\AlumnoCarrera;
use App\Http\Requests;

class AlumnoCarreraController extends Controller
{
    



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AlumnoCarrera::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return AlumnoCarrera::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\AlumnoCarrera  $alumnoCarrera
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return AlumnoCarrera::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\AlumnoCarrera  $alumnoCarrera
     * @return \Illuminate\Http\Response
     */
    public function edit(AlumnoCarrera $alumnoCarrera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\AlumnoCarrera  $alumnoCarrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $union = AlumnoCarrera::findOrFail($id);
        $outcome = $union->fill($this->validate($request,[
            'id_alumno'=> 'required',
            'id_carrera'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Relacion Actualizada';
        }
        else
        {
            return 'Error, no se pudo actualizar la relacion';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\AlumnoCarrera  $alumnoCarrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlumnoCarrera $alumnoCarrera)
    {
        return 'Esta relacion no se destruira jamas';
    }
}
