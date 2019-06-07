<?php

namespace App\Http\Controllers;

use App\Modules\Coordinacion;
use Illuminate\Http\Request;

class CoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Coordinacion::all();
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
        return Coordinacion::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Coordinacion::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinacion $coordinacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coordinacion = Coordinacion::findOrFail($id);
        $outcome = $coordinacion->fill($this->validate($request,[
            'semestre'=> 'required',
            'laboratorio'=> 'required',
            'cupo'=> 'required',
            'id_alumno'=> 'required',
            'id_asignatura'=> 'required',
            'id_profesor'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Coordinacion Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la coordinacion';
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
        $coordinacion = Coordinacion::findOrFail($id);
        $coordinacion->delete();
        return "Se elimino";
    }
}
