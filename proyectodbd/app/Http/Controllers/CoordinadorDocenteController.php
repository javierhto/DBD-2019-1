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


    public function edit()
    {
        $comunas = Comuna::all();
        return view('coordinador.coordinadorEdit', compact('comunas'));
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

