<?php

namespace App\Http\Controllers;

use App\Modules\Horario;
use App\Modules\Coordinacion;
use App\Modules\Asignatura;
use App\Modules\Profesor;
use App\Modules\CoordinacionHorario;
use Illuminate\Http\Request;
use DB;


class CoordinacionHorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CoordinacionHorario::all();
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
        
        return CoordinacionHorario::create($request->all());

    }

    public function coordStore(Request $request, $id)
    {
        $coordinacionNew = new CoordinacionHorario;
        $coordinacionNew->sala = $request->input('sala');
        $coordinacionNew->id_horario = $request->input('id_horario');
        $coordinacionNew->id_coordinacion = $id;
        $coordinacionNew->save();
        
        
        $profesores = Profesor::all();
        $coordinacion = Coordinacion::findOrFail($id);
        $horariosEsp = DB::table('coordinacion_horario')
        ->where('id_coordinacion','=',$id)
        ->join('horario','horario.id','=','coordinacion_horario.id_horario')
        ->get();
        $horarios = DB::table('horario')->get();
        return view('coordinador.coordinadorDetalleCoordinacion', compact('coordinacion','profesores','horarios', 'horariosEsp'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\CoordinacionHorario  $coordinacionHorario
     * @return \Illuminate\Http\Response
     */
    //dado el id de un ramo, estregara todos sus horarios
    public function show($id)
    {
        $ramo = DB::table('coordinacion')
                ->join('coordinacion_horario', 'coordinacion.id', '=', 'coordinacion_horario.id_coordinacion')
                ->where('coordinacion.id_asignatura','=',$id)
                ->select('cupo','id_profesor','sala','id_coordinacion','id_horario')
                ->get();
        return $ramo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\CoordinacionHorario  $coordinacionHorario
     * @return \Illuminate\Http\Response
     */
    public function edit(CoordinacionHorario $coordinacionHorario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\sCoordinacionHorario  $coordinacionHorario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $union = CoordinacionHorario::findOrFail($id);
        $outcome = $union->fill($this->validate($request,[
            'sala'=> 'required',
            'fecha_nacimiento'=> 'required',
            'id_coordinacion'=> 'required',
            'id_horario'=> 'required'

        ]))->save();
        if($outcome)
        {
            return 'La coordinacion con su horario fue Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar la coordinacion con su horario';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\CoordinacionHorario  $coordinacionHorario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinacionHorarios = CoordinacionHorario::findOrFail($id);
        $coordinacionHorarios->delete();
        return "Se elimino";
    }

    public function coordDestroy($id1, $id2)
    {
        $horario = Horario::findOrFail($id2);
        $horario->delete();
        
        $profesores = Profesor::all();
        $coordinacion = Coordinacion::findOrFail($id1);
        $horariosEsp = DB::table('coordinacion_horario')
        ->where('id_coordinacion','=',$id1)
        ->join('horario','horario.id','=','coordinacion_horario.id_horario')
        ->get();
        $horarios = DB::table('horario')->get();
        return view('coordinador.coordinadorDetalleCoordinacion', compact('coordinacion','profesores','horarios', 'horariosEsp'));  
    }
}
