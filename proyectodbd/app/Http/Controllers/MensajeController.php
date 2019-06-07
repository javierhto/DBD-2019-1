<?php

namespace App\Http\Controllers;

use App\Modules\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mensaje::all();
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
        return Mensaje::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Mensaje::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensaje $mensaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $outcome = $mensaje->fill($this->validate($request,[
            'asunto'=> 'required',
            'contenido'=> 'required',
            'remitente'=> 'required',
            'destinatario'=> 'required',
            'archivo'=> 'required',
            'id_alumno'=> 'required',
            'id_profesor'=> 'required'

        ]))->save();
        if($outcome)
        {
            return 'Mensaje Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar Mensaje';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->delete();
        return "Se elimino";
    }
}
