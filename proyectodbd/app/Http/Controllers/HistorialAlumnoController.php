<?php

namespace App\Http\Controllers;

use App\Modules\HistorialAlumno;
use Illuminate\Http\Request;

class HistorialAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HistorialAlumno::all();
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
        return HistorialAlumno::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return HistorialAlumno::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\HistorialAlumno  $historialAlumno
     * @return \Illuminate\Http\Response
     */
    public function edit(HistorialAlumno $historialAlumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\HistorialAlumno  $historialAlumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $historial = HistorialAlumno::findOrFail($id);
        $outcome = $historial->fill($this->validate($request,[
            'semestre'=> 'required',
            'id_alumno'=> 'required',
            'id_profesor'=> 'required',
            'id_asignatura'=> 'required',
            'id_coordinacion'=> 'required',
            'notaCatedra' => 'required',
            'notaLaboratorio' => 'required',
        ]))->save();
        if($outcome)
        {
            return 'Historial del alumno Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar el historial del alumno';
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
        $historialAlumno = HistorialAlumno::findOrFail($id);
        $historialAlumno->delete();
        return "Se elimino";
    }
}
