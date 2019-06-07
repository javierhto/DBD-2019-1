<?php

namespace App\Http\Controllers;

use App\Modules\TarjetaCredito;
use Illuminate\Http\Request;

class TarjetaCreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TarjetaCredito::all();
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
        return TarjetaCredito::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return TarjetaCredito::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\TarjetaCredito  $tarjetaCredito
     * @return \Illuminate\Http\Response
     */
    public function edit(TarjetaCredito $tarjetaCredito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\TarjetaCredito  $tarjetaCredito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarjeta = TarjetaCredito::findOrFail($id);
        $outcome = $tarjeta->fill($this->validate($request,[
            'numero'=> 'required',
            'fecha_expiracion'=> 'required',
            'nombre_titular'=> 'required',
            'pais_facturacion'=> 'required',
            'ciudad_facturacion'=> 'required',
            'direccion_facturacion'=> 'required',
            'id_alumno'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Tarjeta de credito Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la tarjeta de credito';
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
        $tarjetaCredito = TarjetaCredito::findOrFail($id);
        $tarjetaCredito->delete();
        return "Se elimino";
    }
}
