<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Profesor::all();
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
        return Profesor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Profesor::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profe = Profesor::findOrFail($id);
        $outcome = $profe->fill($this->validate($request,[
            'fecha_nacimiento'=> 'required',
            'nombre'=> 'required',
            'correo'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required',
            'celular'=> 'required',
            'contrasena'=> 'required',
            'jornada'=> 'required',
            'situacion'=> 'required',
            'fecha_ingreso'=> 'required',
            'estado_cuenta'=> 'required',
            'grado'=> 'required',
            'id_comuna'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Profesor Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar Profesor';
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
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return "Se elimino";
    }
}
