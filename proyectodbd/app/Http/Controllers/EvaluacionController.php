<?php

namespace App\Http\Controllers;

use App\Modules\Evaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Evaluacion::all();
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
    public function store(Request $request, $id_alumno, $id_asignatura)
    {
        //dd($request->tipo);
        $nota = new Evaluacion;
        $nota->tipo = $request->input('tipo');
        $nota->ponderacion = $request->input('ponderacion');
        $nota->id_asignatura = $id_asignatura;
        $nota->id_alumno = $id_alumno;
        $nota->nombre = $request->input('nombre');
        $nota->nota = $request->input('nota');
        $nota->save();

        if($nota == true)
        {
            //return view('modules.others.checkin.confirmation');
            return view('profesor.profesorExito');;
        }
        else
        {
            return view('profesor.profesorError');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Evaluacion::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prueba = Evaluacion::findOrFail($id);
        $outcome = $prueba->fill($this->validate($request,[
            'nombre'=> 'required',
            'tipo'=> 'required',
            'ponderacion'=> 'required',
            'id_asignatura'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Evaluacion Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la evaluacion';
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
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->delete();
        return "Se elimino";
    }
}
