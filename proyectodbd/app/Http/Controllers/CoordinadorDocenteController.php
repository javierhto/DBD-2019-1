<?php

namespace App\Http\Controllers;

use App\Modules\CoordinadorDocente;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CoordinadorDocenteController extends Controller
{

    use AuthenticatesUsers;

    function __construct()
    {
        $this->middleware('auth:coordinador',['only' => ['secret']]);
    }
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
        return CoordinadorDocente::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CoordinadorDocente::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\CoordinadorDocente  $coordinadorDocente
     * @return \Illuminate\Http\Response
     */
    public function edit(CoordinadorDocente $coordinadorDocente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\CoordinadorDocente  $coordinadorDocente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coordinador = CoordinadorDocente::findOrFail($id);
        $outcome = $coordinador->fill($this->validate($request,[
            'fecha_nacimiento'=> 'required',
            'nombre'=> 'required',
            'correo'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required',
            'celular'=> 'required',
            'contrasena'=> 'required',
            'situacion'=> 'required',
            'fecha_ingreso'=> 'required',
            'estado_cuenta'=> 'required',
            'id_comuna'=> 'required'

        ]))->save();
        if($outcome)
        {
            return 'Coordinador docente Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar Coordinador docente';
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
        $coordinadorDocente = CoordinadorDocente::findOrFail($id);
        $coordinadorDocente->delete();
        return "Se elimino";
    }
}
