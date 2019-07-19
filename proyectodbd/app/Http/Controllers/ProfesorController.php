<?php

namespace App\Http\Controllers;

use App\Modules\Profesor;
use App\Modules\Comuna;
use App\Modules\Alumno;
use App\Modules\Coordinacion;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Modules\CoordinacionProfesor;
use App\Modules\CoordinacionHorario;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;
class ProfesorController extends Controller
{


    use AuthenticatesUsers;


    protected $redirectTo = '/profesor/profesorHome';
    
    public function showLoginForm()
    {
        return view('profesor.profesorLogin');
    }
    
    public function guard()
    {
        return Auth::guard('profesor');
    }

    public function secret()
    {
        return view('profesor.profesorHome');
    }


    public function horario($id)
    {
        $horarios = DB::table('coordinacion')
        ->where('id_profesor', '=', $id)
        ->join('coordinacion_horario','coordinacion_horario.id_coordinacion','=','coordinacion.id')
        ->join('horario','horario.id','=','coordinacion_horario.id_horario')
        ->join('asignatura','asignatura.id','=','coordinacion.id_asignatura')
        ->get();

        return view('profesor.profesorHorario',compact('horarios'));
    }

    public function cursos($id)
    {
        $cursos = DB::table('coordinacion')
        ->where('id_profesor', '=', $id)
        ->join('asignatura','asignatura.id','=','coordinacion.id_asignatura')
        ->join('coordinacion_horario','coordinacion_horario.id_coordinacion','=','coordinacion.id')
        ->get();

        return view('profesor.profesorCursos',compact('cursos'));
    }

    public function admincurso($id)
    {
        $coord = Coordinacion::findOrFail($id);
        $alumnos = DB::table('alumno_coordinacion')
        ->where('id_coordinacion', '=', $id)
        ->join('alumno','alumno.id','=','alumno_coordinacion.id_alumno')
        ->get();
        return view('profesor.profesorAdminCurso',compact('alumnos','coord'));
    }

    public function agregaNota($id_alumno,$id_coordinacion)
    {
        $alumno = Alumno::findOrFail($id_alumno);
        $coord = Coordinacion::findOrFail($id_coordinacion);
        return view('profesor.profesorNuevaNota',compact('alumno','coord'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Profesor::all();
    }


    public function BandejaEntrada($id)
    {
        $mensajes = DB::table('mensaje')
        ->where('id_profesor', '=', $id)        
        ->get();

        return view('profesor.profesorMensajes',compact('mensajes'));
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
        return Profesor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Profesor::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $comunas = Comuna::all();
        return view('profesor.profesorEdit', compact('comunas'));
    }

    public function perfil()
    {
        $comunas = Comuna::all();
        return view('profesor.profesorPerfil', compact('comunas'));
    }


    public function update(Request $request, $id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->update($request->all());
        $comunas = Comuna::all();
        return view('profesor.profesorPerfil', compact('comunas'));
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return "Se elimino";
    }
}
