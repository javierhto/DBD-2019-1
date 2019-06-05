<?php

namespace App\Http\Controllers;

use App\PlanDeEstudiosAsignatura;
use App\PlanDeEstudios;
use Illuminate\Http\Request;

class PlanDeEstudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PlanDeEstudios::all();
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
        return PlanDeEstudios::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return PlanDeEstudios::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanDeEstudios  $planDeEstudios
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanDeEstudios $planDeEstudios)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanDeEstudios  $planDeEstudios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $malla = PlanDeEstudios::findOrFail($id);
        $outcome = $malla->fill($this->validate($request,[
            'semestre'=> 'required',
            'version'=> 'required',
            'id_carrera'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Plan de estudios Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar el plan de estudios';
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
        $planDeEstudios = PlanDeEstudios::findOrFail($id);
        $ramos = PlanDeEstudiosAsignatura::where('id_plan_estudios', $id)->get();
        $ramos->delete();
        $planDeEstudios->delete();
        return "Se elimino";
    }
}
