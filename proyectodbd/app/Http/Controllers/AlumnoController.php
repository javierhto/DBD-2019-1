<?php

namespace App\Http\Controllers;

use App\Modules\Alumno;
use App\Modules\Comuna;
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



    //Fuciones que redireccionan a vistas alumnos
    public function cuenta($id)
    {
        $alumno = Alumno::find($id);
        return view('alumno.cuenta')->with('alumno', $alumno);
    }

    public function horario()
    {
        return view('alumno.horario');
    }

    public function asignaturas()
    {
        return view('alumno.asignaturas');
    }

    public function pagos()
    {
        return view('alumno.pagos');
    }

    public function documentos()
    {
        return view('alumno.documentos');
    }
    
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

    public function datosCurriculares()
    {

        return view('alumno.alumnoDatosC');
    }

    public function datosPersonales()
    {
        
        return view('alumno.alumnoDatosP');
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
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */



    public function edit()
    {
        $comunas = Comuna::all();
        return view('alumno.alumnoEdit', compact('comunas'));
    }


    public function update(Request $request, $id)
    {
        
        $alumno = Alumno::findOrFail($id);
        $outcome = $alumno->fill($this->validate($request,[
            'direccion'=> 'required',
            'telefono'=> 'required',
            'celular'=> 'required',
            'password'=> 'required',
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
