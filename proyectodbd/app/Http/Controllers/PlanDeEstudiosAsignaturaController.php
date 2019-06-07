<?php

namespace App\Http\Controllers;

use App\PlanDeEstudiosAsignatura;
use App\PlanDeEstudios;
use Illuminate\Http\Request;
use DB;

class PlanDeEstudiosAsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return PlanDeEstudiosAsignatura::all();
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
        return PlanDeEstudiosAsignatura::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanDeEstudioAsignatura  $planDeEstudioAsignatura
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $mallas = DB::table('plan_estudios')
                ->join('plan_estudios_asignatura as malla', 'plan_estudios.id', '=', 'malla.id_plan_estudios')
                ->where('malla.id_asignatura','=',$id)
                ->get();
        return $mallas;
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanDeEstudioAsignatura  $planDeEstudioAsignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanDeEstudiosAsignatura $planDeEstudiosAsignatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanDeEstudioAsignatura  $planDeEstudioAsignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $malla = PlanDeEstudiosAsignatura::findOrFail($id);
        $outcome = $malla->fill($this->validate($request,[
            'id_plan_estudio'=> 'required',
            'id_asignatura'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Plan de estudio con la asignatura Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanDeEstudioAsignatura  $planDeEstudioAsignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mallaRellenada = PlanDeEstudiosAsignatura::findOrFail($id);
        $mallaRellenada->delete();
        return "Se elimino";
    }
}
