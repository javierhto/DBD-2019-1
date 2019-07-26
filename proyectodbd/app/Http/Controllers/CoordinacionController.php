<?php

namespace App\Http\Controllers;

use App\Modules\Coordinacion;
use App\Modules\Asignatura;
use App\Modules\Profesor;
use Illuminate\Http\Request;
use DB;

class CoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Coordinacion::all();
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

    public function createAdmin($id)
    {
        $profesores = Profesor::all();
        $asignatura = Asignatura::findOrFail($id);        
        return view('admin.adminCreaCoordinacion',compact('profesores','asignatura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Coordinacion::create($request->all());
    }

    public function storeAdmin(Request $request, $id)
    {


        $coordinacion = new Coordinacion;
        $coordinacion->semestre = $request->input('semestre');
        $coordinacion->laboratorio = $request->input('laboratorio');
        $coordinacion->cupo = $request->input('cupo');
        $coordinacion->id_asignatura = $id;
        $coordinacion->id_profesor =  $request->input('id_profesor');
        $coordinacion->save();



        $asignatura = Asignatura::findOrFail($id);
        $coordinaciones = DB::table('coordinacion')
        ->where('id_asignatura', '=', $id)        
        ->get();
        $profesores = Profesor::all();
        return view('admin.adminCoordinaciones',compact('coordinaciones','profesores','asignatura'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Coordinacion::findOrFail($id);
    }


    public function showCoordinacion($id)
    {
        $profesores = Profesor::all();
        $coordinacion = Coordinacion::findOrFail($id);
        return view('admin.adminDetallesCoordinacion', compact('coordinacion','profesores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinacion $coordinacion)
    {
        //
    }



    public function editCoordinacion($id)
    {
        $coordinacion = Coordinacion::findOrFail($id);        
        $profesores = Profesor::all();
        return view('admin.adminModificaCoordinacion', compact('coordinacion','profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coordinacion = Coordinacion::findOrFail($id);
        $outcome = $coordinacion->fill($this->validate($request,[
            'semestre'=> 'required',
            'laboratorio'=> 'required',
            'cupo'=> 'required',
            //'id_alumno'=> 'required',
            'id_asignatura'=> 'required',
            'id_profesor'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Coordinacion Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la coordinacion';
        }
    }


    public function updateCoordinacion(Request $request, $id)
    {
        $coordinacion = Coordinacion::findOrFail($id);
        $coordinacion->semestre = $request->get('semestre');
        $coordinacion->laboratorio = $request->get('laboratorio');
        $coordinacion->cupo = $request->get('cupo');
        $coordinacion->id_profesor = $request->get('id_profesor');
        
        $coordinacion->save();

        $asignatura = Asignatura::findOrFail($coordinacion->id_asignatura);
        $coordinaciones = DB::table('coordinacion')
        ->where('id_asignatura', '=', $coordinacion->id_asignatura)        
        ->get();
        $profesores = Profesor::all();
        return view('admin.adminCoordinaciones',compact('coordinaciones','profesores','asignatura'));

        
        
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinacion = Coordinacion::findOrFail($id);
        $id_asignatura = $coordinacion->id_asignatura;
        $coordinacion->delete();
        $coordinaciones = DB::table('coordinacion')
        ->where('id_asignatura', '=', $id_asignatura)        
        ->get();
        $asignatura = Asignatura::findOrFail($id_asignatura);
        

        
        $profesores = Profesor::all();
        return view('admin.adminCoordinaciones',compact('coordinaciones','profesores','asignatura'));
    }
}
