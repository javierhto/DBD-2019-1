<?php

namespace App\Http\Controllers;

use App\Modules\AdministradorGeneral;
use Illuminate\Http\Request;

class AdministradorGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AdministradorGeneral::all();
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
        return AdministradorGeneral::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return AdministradorGeneral::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\AdministradorGeneral  $administradorGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(AdministradorGeneral $administradorGeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\AdministradorGeneral  $administradorGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $administrador = AdministradorGeneral::findOrFail($id);
        $outcome = $administrador->fill($this->validate($request,[
            'nombre'=> 'required',
            'correo'=> 'required',
            'direccion'=> 'required',
            'celular'=> 'required',
            'contrasena'=> 'required',
            'jornada'=> 'required',
            'situacion'=> 'required',
            'fecha_ingreso'=> 'required',
        ]))->save();
        if($outcome)
        {
            return 'Administrador General Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar Administrador General ';
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
        $administrador = AdministradorGeneral::findOrFail($id);
        $administrador->delete();
        return "Se elimino";
    }
}
