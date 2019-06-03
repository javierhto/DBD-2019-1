<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Alumno::all();
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
        return Alumno::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Alumno::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
        $alumno = Alumno::find($id);
        $outcome = $alumno->fill($this->validate($request,[
            'ano_ingreso'=> 'required',
            'asignaturas_aprovadas'=> 'required',
            'avance'=> 'required',
            'celular'=> 'required',
            'contrasena'=> 'required',
            'correo'=> 'required',
            'direccion'=> 'required',
            'eficiencia'=> 'required',

        ]))->save();
        if($outcome)
        {
            return 'Bieeeen';
        }
        else
        {
            return 'LLoraaaaar';
        }
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $almuno->delete();
        return "Se elimino";
    }
}
