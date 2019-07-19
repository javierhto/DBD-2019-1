@extends('layouts.layoutAlumno')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Mis calificaciones
                </div>
            	
                <div class="card-body">
                	@if (session('status'))
                    	<div class="alert alert-success" role="alert">
                        	{{ session('status') }}
                    	</div>
                	@endif
                
                    <div class="table-responsive">
                      <center>
                        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <td class="align-middle"> Asignatura </td>
                                    <td class="align-middle"> Semestre </td>
                                    <td class="align-middle"> Docente </td>
                                    <td class="align-middle"> Nota Catedra </td>
                                    <td class="align-middle"> Nota Laboratorio </td>
                                </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                        	@for($i = 0; $i< count($historial) ;$i++)
                            <tr>
                            	<td class="align-middle"> {{ $historial[$i]->nombre }} </td>
                                <td class="align-middle"> {{ $historial[$i]->semestre }} </td>
                                <td class="align-middle"> {{ $profesor[$i]->nombre }} </td>
                                <td class="align-middle"> {{ $historial[$i]->notaCatedra }} </td>
                                <td class="align-middle"> {{ $historial[$i]->notaLaboratorio }} </td>
                            </tr>
                            @endfor
                        </tbody>
                      </table> 
                      </center>
                    </div>
@endsection
