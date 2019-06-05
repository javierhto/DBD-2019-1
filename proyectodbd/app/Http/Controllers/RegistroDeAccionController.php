<?php

namespace App\Http\Controllers;

use App\RegistroDeAccion;
use Illuminate\Http\Request;

class RegistroDeAccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegistroDeAccion::all();
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
        return RegistroDeAccion::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return RegistroDeAccion::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroDeAccion  $registroDeAccion
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroDeAccion $registroDeAccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroDeAccion  $registroDeAccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroDeAccion $registroDeAccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $RegistroDeAccion = RegistroDeAccion::find($id);
        $RegistroDeAccion->delete();
        return "Se elimino";
    }
}
