<?php

namespace App\Http\Controllers;

use App\Modules\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Documento::all();
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
        return Documento::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Documento::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $documento = Documento::findOrFail($id);
        $outcome = $documento->fill($this->validate($request,[
            'nombre' => 'required',
            'fecha' => 'required',
            'documento' => 'required'

        ]))->save();
        if($outcome)
        {
            return 'Documento Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar el documento';
        }
    }
            
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento = Documento::findOrFail($id);
        $documento->delete();
        return "Se elimino";
    }
}
