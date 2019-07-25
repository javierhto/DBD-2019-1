<?php

namespace App\Http\Controllers;

use App\Modules\Horario;
use App\Modules\Coordinacion;
use App\Modules\Asignatura;
use App\Modules\Profesor;
use App\Modules\CoordinacionHorario;
use Illuminate\Http\Request;
use DB;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Horario::all();
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
        return Horario::create($request->all());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Horario::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bloque = Horario::findOrFail($id);
        $outcome = $bloque->fill($this->validate($request,[
            'dia'=> 'required',
            'bloque'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Horario Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar horario';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horario = Horario::findOrFail($id);
        $horario->delete();
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
