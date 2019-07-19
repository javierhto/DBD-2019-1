<?php

namespace App\Http\Controllers;

use App\Modules\Profesor;
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
        $alumnos = DB::table('alumno_coordinacion')
        ->where('id_coordinacion', '=', $id)
        ->join('alumno','alumno.id','=','alumno_coordinacion.id_alumno')
        ->get();
        return view('profesor.profesorAdminCurso',compact('alumnos'));
    }

    public function agregaNota($id)
    {
        $alumno = Profesor::findOrFail($id);
        return view('profesor.profesorNuevaNota',compact('alumno'));
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
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profe = Profesor::findOrFail($id);
        $outcome = $profe->fill($this->validate($request,[
            'fecha_nacimiento'=> 'required',
            'nombre'=> 'required',
            'correo'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required',
            'celular'=> 'required',
            'contrasena'=> 'required',
            'jornada'=> 'required',
            'situacion'=> 'required',
            'fecha_ingreso'=> 'required',
            'estado_cuenta'=> 'required',
            'grado'=> 'required',
            'id_comuna'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Profesor Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar Profesor';
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
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return "Se elimino";
    }
}
