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
        $tarjeta = TarjetaCredito::findOrFail($id);
        $id_alumno = $tarjeta->id_alumno;
        $tarjeta->delete();
        return redirect()->route('Tarjetas', $id_alumno)
                        ->with('success', 'Tarjeta eliminada');        
    }

    public function crearTarjeta()
    {
        return view('alumno.creaTarjeta');
    }

    public function alumnoStore(Request $request, $id)
    {   
        $Tarjeta = new TarjetaCredito;
        $Tarjeta->id_alumno = $id;
        $Tarjeta->numero= $request->input('numero');
        $Tarjeta->nombre_titular= $request->input('nombre_titular');
        $Tarjeta->fecha_expiracion= $request->input('fecha_expiracion');
        $Tarjeta->pais_facturacion= $request->input('pais_facturacion');
        $Tarjeta->ciudad_facturacion= $request->input('ciudad_facturacion');
        $Tarjeta->direccion_facturacion= $request->input('direccion_facturacion');
        $Tarjeta->save();
        
        return redirect()->route('Tarjetas', $id)
                        ->with('success', 'Tarjeta creada');        
    }
}
