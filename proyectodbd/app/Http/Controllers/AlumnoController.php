<?php

namespace App\Http\Controllers;

use App\Modules\Alumno;
use App\Modules\AlumnoCarrera;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class AlumnoController extends Controller
{

    use AuthenticatesUsers;
/*
    function __construct()
    {
        $this->middleware('auth:alumno',['only' => ['secret']]);
    }
    */
    protected $redirectTo = '/alumno/alumnoHome';
    
    public function showLoginForm()
    {
        return view('alumno.alumnoLogin');
    }
    
    public function guard()
    {
        return Auth::guard('alumno');
    }

    public function secret()
    {
        return view('alumno.alumnoHome');
    }

    public function horario()
    {
        return view('alumno.alumnoHorario');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Alumno::all();
        return view('homeAlumno');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $nuevoAlumno=Alumno::create($request->all());
        AlumnoCarrera::create(['id_alumno'=>$nuevoAlumno->id,'id_carrera'=>$nuevoAlumno->id_carrera]);
        return "Alumno creado";
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Alumno::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Alumno  $alumno
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
     * @param  \App\Modules\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $outcome = $alumno->fill($this->validate($request,[
            'numero_matricula'=> 'required',
            'fecha_nacimiento'=> 'required',
            'nombre'=> 'required',
            'correo'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required',
            'celular'=> 'required',
            'contrasena'=> 'required',
            'jornada'=> 'required',
            'situacion'=> 'required',
            'ano_ingreso'=> 'required',
            'ultima_matricula'=> 'required',
            'avance'=> 'required',
            'eficiencia'=> 'required',
            'asignaturas_aprobadas'=> 'required',
            'nivel_actual'=> 'required',
            'PPA'=> 'required',
            'id_comuna'=> 'required',
            'id_carrera'=> 'required'

        ]))->save();
        if($outcome)
        {
            return 'Alumno Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar alumno';
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
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        
        return "Se elimino [Alumno]";
    }
}
