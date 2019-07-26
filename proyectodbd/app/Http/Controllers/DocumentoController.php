<?php

namespace App\Http\Controllers;

use App\Modules\Documento;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alumnoIndex()
    {
        $documentos = Documento::orderBy('created_at', 'DESC')->paginate(10);
        return view('alumno.alumnoArchivos', ['documentos' => $documentos]);
    }

    public function profesorIndex()
    {
        $documentos = Documento::orderBy('created_at', 'DESC')->paginate(10);
        return view('profesor.profesorArchivos', ['documentos' => $documentos]);
    }

    public function coordinadorIndex()
    {
        $documentos = Documento::orderBy('created_at', 'DESC')->paginate(10);
        return view('coordinador.coordinadorArchivos', ['documentos' => $documentos]);
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
    public function alumnoStore(Request $request)
    {
        $upload = $request->file('file');
        $path = $upload->store('public/storage');
        $file = Documento::create([
            'nombre' => $upload->getClientOriginalName(),
            'path' => $path
        ]);
        return redirect('/alumno/alumnoArchivos');
    }

    public function profesorStore(Request $request)
    {
        $upload = $request->file('file');
        $path = $upload->store('public/storage');
        $file = Documento::create([
            'nombre' => $upload->getClientOriginalName(),
            'path' => $path
        ]);
        return redirect('/profesor/profesorArchivos');
    }

    public function coordinadorStore(Request $request)
    {
        $upload = $request->file('file');
        $path = $upload->store('public/storage');
        $file = Documento::create([
            'nombre' => $upload->getClientOriginalName(),
            'path' => $path
        ]);
        return redirect('/coordinador/coordinadorArchivos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doc = Documento::findOrFail($id);
        return Storage::download($doc->path, $doc->nombre);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $documento = Documento::findOrFail($id);
        $outcome = $documento->fill($this->validate($request,[
            'nombre' => 'required',
            'fecha' => 'required',
            'documento' => 'required'

        ]))->save();
        if($outcome)
        {
            return 'Documento Actualizado';
        }
        else
        {
            return 'Error, no se pudo actualizar el documento';
        }
    }
            
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento = Documento::findOrFail($id);
        $documento->delete();
        return "Se elimino";
    }
}
