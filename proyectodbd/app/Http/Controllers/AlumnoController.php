<?php

namespace App\Http\Controllers;

use App\Modules\Alumno;
use App\Modules\Comuna;
use App\Modules\AlumnoCarrera;
use App\Modules\CoordinacionHorario;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;


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

    public function horario($id)
    {
        

        $horarios = DB::table('alumno_coordinacion')
        ->where('id_alumno', '=', $id)
        ->join('coordinacion','coordinacion.id','=','alumno_coordinacion.id_coordinacion')
        ->join('coordinacion_horario','coordinacion_horario.id_coordinacion','=','alumno_coordinacion.id_coordinacion')
        ->join('horario','horario.id','=','coordinacion_horario.id_horario')
        ->join('asignatura','asignatura.id','=','coordinacion.id_asignatura')
        
        ->get();

        return view('alumno.alumnoHorario',compact('horarios'));
    }

/* agregar profesor a la consulta de arriba
->join('coordinacion_profesor','coordinacion_profesor.id_coordinacion','=','coordinacion.id')
        ->join('profesor','profesor.id','=','coordinacion_profesor.id_profesor')


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

    public function edit()
    {
        $comunas = Comuna::all();
        return view('alumno.alumnoEdit', compact('comunas'));
    }

    public function perfil()
    {
        $comunas = Comuna::all();
        return view('alumno.alumnoPerfil', compact('comunas'));
    }


    public function update(Request $request, $id)
    {
        
        $alumno = Alumno::findOrFail($id);
        $outcome = $alumno->fill($this->validate($request,[
            'direccion'=> 'required',
            'telefono'=> 'required',
            'celular'=> 'required',
            'id_comuna'=> 'required',

        ]))->save();
        if($outcome)
        {
            return back()->with('success_message','Actualizado con éxito!');
        }
        else
        {
            return back()->with('success_message','Ha ocurrido un error en la Base de Datos al actualizar!');
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
