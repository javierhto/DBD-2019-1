@extends('layouts.layoutProfesor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CURSOS
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
                            <td class="align-middle"> Codigo </td>
                            <td class="align-middle"> Tipo </td>
                            <td class="align-middle"> Asignatura </td>
                            <td class="align-middle"> Administrar </td>
                          </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                          @foreach ($cursos as $curso)
                            <tr>
                              <td class="align-middle">
                                {{ $curso->id_asignatura }} <br>       
                              </td>
                              <td class="align-middle">
                                
                                @if ( $curso->laboratorio  != 1)
                                  CATEDRA
                                @else
                                  LABORATORIO
                                @endif
                              </td>
                              <td class="align-middle">
                                <a class="nav-link" href="{{ route ('CursosProfe',$curso->id_coordinacion)}}"> 
                                  {{ $curso->nombre }}
                                </a>                            
                              </td>
                              <td class="align-middle">
                                <a class="nav-link" href="{{ route ('AdminCursoProfe', $curso->id_coordinacion)}}"> 
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