<?php

namespace App\Http\Controllers;

use App\CoordinacionProfesor;
use Illuminate\Http\Request;

class CoordinacionProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CoordinacionProfesor::all();
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
        return CoordinacionProfesor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CoordinacionProfesor  $coordinacionProfesor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor=CoordinacionProfesor::where('id_profesor', $id)
        ->select('id_profesor','id_coordinacion','id')
        ->get();
        return $ramo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CoordinacionProfesor  $coordinacionProfesor
     * @return \Illuminate\Http\Response
     */
    public function edit(CoordinacionProfesor $coordinacionProfesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoordinacionProfesor  $coordinacionProfesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $union = CoordinacionHorario::findOrFail($id);
        $outcome = $union->fill($this->validate($request,[
            'id_coordinacion'=> 'required',
            'id_profesor'=> 'required'

        ]))->save();
        if($outcome)
        {
            return 'La coordinacion con su profesor fue Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la coordinacion con su horario';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoordinacionProfesor  $coordinacionProfesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinacionProfsors = CoordinacionProfesor::findOrFail($id);
        $coordinacionProfsors->delete();
        return "Se elimino";
    }
}
