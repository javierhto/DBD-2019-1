<?php

namespace App\Http\Controllers;

use App\Modules\CoordinadorDocente;
use App\Modules\Comuna;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CoordinadorDocenteController extends Controller
{

    use AuthenticatesUsers;


    protected $redirectTo = '/coordinador/coordinadorHome';
    
    public function showLoginForm()
    {
        return view('coordinador.coordinadorLogin');
    }
    
    public function guard()
    {
        return Auth::guard('coordinador');
    }

    public function secret()
    {
        return view('coordinador.coordinadorHome');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CoordinadorDocente::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunas = Comuna::all();
        return view('admin.adminCreaCoordinador', compact('comunas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        CoordinadorDocente::create($request->all());
        return redirect()->route('AdminCoordinadores')
                        ->with('success', 'Coordinador docente Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coordinador = CoordinadorDocente::findOrFail($id);
        return view('admin.adminDetallesCoordinador', compact('coordinador'));
    }


    public function edit()
    {
        $comunas = Comuna::all();
        return view('coordinador.coordinadorEdit', compact('comunas'));
    }
    public function editCoordinador($id)
    {
        $coordinador = CoordinadorDocente::findOrFail($id);
        $comunas = Comuna::all();
        return view('admin.adminModificaCoordinador', compact('comunas','coordinador'));
    }
    public function perfil()
    {
        $comunas = Comuna::all();
        return view('coordinador.coordinadorPerfil', compact('comunas'));
    }


    public function update(Request $request, $id)
    {
        $coordinador = CoordinadorDocente::findOrFail($id);
        $coordinador->update($request->all());
        $comunas = Comuna::all();
        return view('coordinador.coordinadorPerfil', compact('comunas'));
        
        
    }

    public function updateCoordinador(Request $request, $id)
    {
        $coordinador = CoordinadorDocente::findOrFail($id);
        $coordinador->nombre = $request->get('nombre');
        $coordinador->fecha_nacimiento = $request->get('fecha_nacimiento');
        $coordinador->email = $request->get('email');
        $coordinador->direccion = $request->get('direccion');
        $coordinador->telefono = $request->get('telefono');
        $coordinador->celular = $request->get('celular');
        $coordinador->jornada = $request->get('jornada');
        $coordinador->situacion = $request->get('situacion');
        $coordinador->fecha_ingreso = $request->get('fecha_ingreso');        
        $coordinador->estado_cuenta = $request->get('estado_cuenta');
        $coordinador->save();

        return redirect()->route('AdminCoordinadores')
                        ->with('success', 'Coordinador docente Modificado');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinador = CoordinadorDocente::findOrFail($id);
        $coordinador->delete();
        return redirect()->route('AdminCoordinadores')
                        ->with('success', 'Coordinador docente Eliminado con exito');
    }
}

