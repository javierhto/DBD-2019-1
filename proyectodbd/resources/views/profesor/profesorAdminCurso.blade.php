@extends('layouts.layoutProfesor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Alumnos del curso 
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
                            <td class="align-middle"> alumno </td>
                            <td class="align-middle"> Agregar nota </td>
                          </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                          @foreach ($alumnos as $alumno)
                            <tr>
                              <td class="align-middle">
                                {{ $alumno->nombre }} <br>       
                              </td>

                              <td class="align-middle">
                                <a class="nav-link" href="{{ route ('NuevaNotaProfe', ['id_alumno' =>  $alumno->id_alumno, 'id_coordinacion' => $coord->id_asignatura ])}}"> 
                                  ACCEDER
                                </a>
                                 
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table> 
                      </center>
                    </div>                  
                </div>
        	</div>
    	</div>
	</div>
</div>
@endsection