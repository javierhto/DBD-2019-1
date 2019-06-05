<?php

namespace App\Http\Controllers;

use App\CoordinacionHorario;
use Illuminate\Http\Request;

class CoordinacionHorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CoordinacionHorario::all();
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
        return CoordinacionHorario::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CoordinacionHorario  $coordinacionHorario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CoordinacionHorario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CoordinacionHorario  $coordinacionHorario
     * @return \Illuminate\Http\Response
     */
    public function edit(CoordinacionHorario $coordinacionHorario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoordinacionHorario  $coordinacionHorario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $union = CoordinacionHorario::findOrFail($id);
        $outcome = $union->fill($this->validate($request,[
            'sala'=> 'required',
            'fecha_nacimiento'=> 'required',
            'id_coordinacion'=> 'required',
            'id_horario'=> 'required'

        ]))->save();
        if($outcome)
        {
            return 'La coordinacion con su horario fue Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la coordinacion con su horario';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoordinacionHorario  $coordinacionHorario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinacionHorarios = CoordinacionHorario::findOrFail($id);
        $coordinacionHorarios->delete();
        return "Se elimino";
    }
}
