<?php

namespace App\Http\Controllers;

use App\Modules\Facturacion;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Facturacion::all();
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
        return Facturacion::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Facturacion::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Facturacion  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Facturacion $facturacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Facturacion  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $factura = Facturacion::findOrFail($id);
        $outcome = $factura->fill($this->validate($request,[
            'estado'=> 'required',
            'monto'=> 'required',
            'fecha'=> 'required',
            'fecha_expiracion'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Factura Actualizada';
        }
        else
        {
            return 'Error, no se pudo actualizar la factura';
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
        $facturacion = Facturacion::findOrFail($id);
        $facturacion->delete();
        return "Se elimino";
    }
}
