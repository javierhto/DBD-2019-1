<?php

namespace App\Http\Controllers;

use App\Modules\AlumnoCoordinacion;
use Illuminate\Http\Request;

class AlumnoCoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Alumno::all();
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
        $tomaRamo=AlumnoCoordinacion::create($request->all());
        return "El alumno esta inscrito en este ramo";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AlumnoCoordinacion  $alumnoCoordinacion
     * @return \Illuminate\Http\Response
     */
    //Dado el id de un alumno, mostrara su carga
    public function show($id)
    {
        $horario=AlumnoCoordinacion::where('id_alumno', $id)
        ->select('id_alumno','id_coordinacion','id')
        ->get();
        return $horario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AlumnoCoordinacion  $alumnoCoordinacion
     * @return \Illuminate\Http\Response
     */
    public function edit(AlumnoCoordinacion $alumnoCoordinacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlumnoCoordinacion  $alumnoCoordinacion
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    {
        $ramo = AlumnoCoordinacion::findOrFail($id);
        $outcome = $ramo->fill($this->validate($request,[
            'id_alumno'=> 'required',
            'id_coordinacion'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Asignatura Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la asignatura';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AlumnoCoordinacion  $alumnoCoordinacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = AlumnoCoordinacion::findOrFail($id);
        $alumno->delete();
        return "Se elimino";
    }
}
