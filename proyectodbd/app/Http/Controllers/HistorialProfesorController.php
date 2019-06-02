<?php

namespace App\Http\Controllers;

use App\HistorialProfesor;
use Illuminate\Http\Request;

class HistorialProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HistorialProfesor::all();
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
        return HistorialProfesor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return HistorialProfesor::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HistorialProfesor  $historialProfesor
     * @return \Illuminate\Http\Response
     */
    public function edit(HistorialProfesor $historialProfesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HistorialProfesor  $historialProfesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialProfesor $historialProfesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historialProfesor = HistorialProfesor::find($id);
        $historialProfesor->delete();
        return "Se elimino";
    }
}
