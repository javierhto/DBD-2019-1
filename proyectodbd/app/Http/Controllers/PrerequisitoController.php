<?php

namespace App\Http\Controllers;

use App\Prerequisito;
use Illuminate\Http\Request;

class PrerequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Prerequisito::all();
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
        return Prerequisito::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Prerequisito::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prerequisito  $prerequisito
     * @return \Illuminate\Http\Response
     */
    public function edit(Prerequisito $prerequisito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prerequisito  $prerequisito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prerequisito $prerequisito)
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
        $prerequisito = Prerequisito::find($id);
        $prerequisito->delete();
        return "Se elimino";
    }
}
