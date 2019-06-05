<?php

namespace App\Http\Controllers;

use App\PlanDeEstudiosAsignatura;
use Illuminate\Http\Request;

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
    public function show(PlanDeEstudiosAsignatura $planDeEstudiosAsignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanDeEstudioAsignatura  $planDeEstudioAsignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanDeEstudioAsignatura $planDeEstudiosAsignatura)
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
    public function update(Request $request, PlanDeEstudiosAsignatura $planDeEstudiosAsignatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanDeEstudioAsignatura  $planDeEstudioAsignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanDeEstudiosAsignatura $planDeEstudiosAsignatura)
    {
        //
    }
}
