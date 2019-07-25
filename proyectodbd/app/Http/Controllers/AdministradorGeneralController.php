<?php

namespace App\Http\Controllers;

use App\Modules\AdministradorGeneral;
use App\Modules\Comuna;
use App\Modules\Asignatura;
use App\Modules\Alumno;
use App\Modules\Profesor;
use App\Modules\Coordinacion;
use App\Modules\CoordinadorDocente;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;

class AdministradorGeneralController extends Controller
{
    use AuthenticatesUsers;


    protected $redirectTo = '/admin/adminHome';
    
    public function showLoginForm()
    {
        return view('admin.adminLogin');
    }
    
    public function guard()
    {
        return Auth::guard('admin');
    }

    public function secret()
    {
        return view('admin.adminHome');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
        return AdministradorGeneral::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunas = Comuna::all();
        return view('admin.adminCreaAdministrador', compact('comunas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AdministradorGeneral::create($request->all());
        return redirect()->route('AdminAdministradores')
                        ->with('success', 'Administrador Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrador = AdministradorGeneral::findOrFail($id);

        return view('admin.adminDetallesAdministrador', compact('administrador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\AdministradorGeneral  $administradorGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $comunas = Comuna::all();
        return view('admin.adminEdit', compact('comunas'));
    }


    public function editAdministrador($id)
    {
        $administrador = AdministradorGeneral::findOrFail($id);
        $comunas = Comuna::all();
        return view('admin.adminModificaAdministrador', compact('comunas','administrador'));
    }
    public function perfil()
    {
        $comunas = Comuna::all();
        return view('admin.adminPerfil', compact('comunas'));
    }


    public function update(Request $request, $id)
    {
        $admin = AdministradorGeneral::findOrFail($id);
        $admin->update($request->all());
        $comunas = Comuna::all();
        return view('admin.adminPerfil', compact('comunas'));
    }


    public function updateAdministrador(Request $request, $id)
    {
        $admin = AdministradorGeneral::findOrFail($id);
        $admin->update($request->all());
        return redirect()->route('AdminAdministradores')
                        ->with('success', 'Administrador Modificado');
    }
    public function MostrarAlumnos($id)
    {
        $Alumno = Alumno::findOrFail($id);
        return view('admin.adminDetallesAlumno', compact('Alumno'));            
    }


    public function Alumnos()
    {
        $alumnos = Alumno::latest()->paginate(5);
        return view('admin.adminAlumnos', compact('alumnos'))
            ->with('i', (request()->input('page',1) -1 )*5);
    }
    public function Profesores()
    {
        $profesores = Profesor::latest()->paginate(5);
        return view('admin.adminProfesores', compact('profesores'))
            ->with('i', (request()->input('page',1) -1 )*5);
    }
    public function Coordinadores()
    {
        $coordinadores = CoordinadorDocente::latest()->paginate(5);
        return view('admin.adminCoordinadores', compact('coordinadores'))
            ->with('i', (request()->input('page',1) -1 )*5);
    }

    public function Coordinaciones($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $coordinaciones = DB::table('coordinacion')
        ->where('id_asignatura', '=', $id)        
        ->get();
        $profesores = Profesor::all();
        return view('admin.adminCoordinaciones',compact('coordinaciones','profesores','asignatura'));
    }



    public function Asignaturas()
    {
        $asignaturas = Asignatura::latest()->paginate(5);
        return view('admin.adminAsignaturas', compact('asignaturas'))
            ->with('i', (request()->input('page',1) -1 )*5);
    }

    public function Administradores()
    {
        $administradores = AdministradorGeneral::latest()->paginate(5);
        return view('admin.adminAdministradores', compact('administradores'))
            ->with('i', (request()->input('page',1) -1 )*5);
    }


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrador = AdministradorGeneral::findOrFail($id);
        $administrador->delete();
        return redirect()->route('AdminAdministradores');
    }




}

