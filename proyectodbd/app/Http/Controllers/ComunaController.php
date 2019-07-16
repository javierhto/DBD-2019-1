<?php

namespace App\Http\Controllers;

use App\User;
use App\Modules\Comuna;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comuna::all();
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
        return App\Modules\Comuna::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Comuna::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Comuna  $comuna
     * @return \Illuminate\Http\Response
     */
    public function edit(Comuna $comuna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Comuna  $comuna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $comuna = Comuna::findOrFail($id);
        $outcome = $comuna->fill($this->validate($request,[
            'nombre'=> 'required',
            'id_region'=> 'required'
        ]))->save();
        if($outcome)
        {
            return 'Comuna Actualizada';
        }
        else
        {
            return 'Error, no se pudo actualizar la comuna';
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
        $comuna = Comuna::findOrFail($id);
        $comuna->delete();
        return "Se elimino";
    }
}
