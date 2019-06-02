<?php

namespace App\Http\Controllers;

use App\TarjetaCredito;
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
        return TarjetaCredito::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TarjetaCredito  $tarjetaCredito
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
     * @param  \App\TarjetaCredito  $tarjetaCredito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TarjetaCredito $tarjetaCredito)
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
        $tarjetaCredito = TarjetaCredito::find($id);
        $tarjetaCredito->delete();
        return "Se elimino";
    }
}
