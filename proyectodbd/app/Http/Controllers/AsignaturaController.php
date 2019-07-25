<?php

namespace App\Http\Controllers;

use App\Modules\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Asignatura::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAdmin()
    {
        return view('admin.adminCreaAsignatura');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAdmin(Request $request)
    {
        Asignatura::create($request->all());
        return redirect()->route('AdminAsignaturas')
                        ->with('success', 'Asignatura Creada');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAsignatura($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        return view('admin.adminDetallesAsignatura', compact('asignatura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignatura $asignatura)
    {
        //
    }
    public function editAsignatura($id)
    {
        $asignatura = Asignatura::findOrFail($id);        
        return view('admin.adminModificaAsignatura', compact('asignatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $outcome = $asignatura->fill($this->validate($request,[
            'nombre'=> 'required',
            'nivel'=> 'required',
            'T'=> 'required',
            'E'=> 'required',
            'L'=> 'required'

        ]))->save();
        if($outcome)
        {
            return 'Asignatura Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la asignatura';
        }
    }


    public function updateAsignatura(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->nombre = $request->get('nombre');
        $asignatura->nivel = $request->get('nivel');
        $asignatura->T = $request->get('T');
        $asignatura->E = $request->get('E');
        $asignatura->L = $request->get('L');
        
        $asignatura->save();

        return redirect()->route('AdminAsignaturas')
                        ->with('success', 'Asignatura Modificado');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->delete();
        return redirect()->route('AdminAsignaturas')
                        ->with('success', 'Asignatura Eliminado con exito');
    }
}
