<?php



namespace App\Http\Controllers;

use App\Modules\Alumno;
use App\Modules\Comuna;
use App\Modules\AlumnoCarrera;
use App\Modules\AlumnoCoordinacion;
use App\Modules\CoordinacionHorario;
use App\Modules\Coordinacion;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;

class AlumnoCoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AlumnoCoordinacion::all();
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
        $tomaRamo=AlumnoCoordinacion::create($request->all());
        return "El alumno esta inscrito en este ramo";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AlumnoCoordinacion  $alumnoCoordinacion
     * @return \Illuminate\Http\Response
     */
    //Dado el id de un alumno, mostrara su carga
    public function show($id)
    {
        $horario=AlumnoCoordinacion::where('id_alumno', $id)
        ->select('id_alumno','id_coordinacion','id')
        ->get();
        return $horario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AlumnoCoordinacion  $alumnoCoordinacion
     * @return \Illuminate\Http\Response
     */
    public function edit(AlumnoCoordinacion $alumnoCoordinacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlumnoCoordinacion  $alumnoCoordinacion
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    {
        $ramo = AlumnoCoordinacion::findOrFail($id);
        $outcome = $ramo->fill($this->validate($request,[
            'id_alumno'=> 'required',
            'id_coordinacion'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Asignatura actualizada';
        }
        else
        {
            return 'Error, no se pudo actualizar la asignatura';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AlumnoCoordinacion  $alumnoCoordinacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_alumno,$id_coordinacion)
    {   

        $alumno = AlumnoCoordinacion::where("id_coordinacion","=",$id_coordinacion);

        $alumno->delete();

        set_time_limit(0);
        $asignaturas = DB::table('alumno_carrera')
        ->where('id_alumno', '=', $id_alumno)
        ->join('plan_estudios','plan_estudios.id_carrera','=','alumno_carrera.id_carrera')
        ->join('plan_estudios_asignatura','plan_estudios_asignatura.id_plan_estudios','=','plan_estudios.id')
        ->join('asignatura','asignatura.id','=','plan_estudios_asignatura.id_asignatura')
        ->get();


        $horarios2 = DB::table('horario')
        ->join('coordinacion_horario','coordinacion_horario.id_horario','=','horario.id')
        ->get();

        $profesores = DB::table('profesor')
        ->join('coordinacion_profesor','coordinacion_profesor.id_profesor','=','profesor.id')
        ->get();


        $coordinaciones = Coordinacion::all();
        $horarios = DB::table('alumno_coordinacion')
        ->where('id_alumno', '=', $id_alumno)
        ->join('coordinacion','coordinacion.id','=','alumno_coordinacion.id_coordinacion')
        ->join('coordinacion_horario','coordinacion_horario.id_coordinacion','=','alumno_coordinacion.id_coordinacion')
        ->join('horario','horario.id','=','coordinacion_horario.id_horario')
        ->join('asignatura','asignatura.id','=','coordinacion.id_asignatura')
        
        ->get();
        return view('alumno.inscripcion', compact('horarios','horarios2','asignaturas','profesores','coordinaciones'));
    
    }
}
