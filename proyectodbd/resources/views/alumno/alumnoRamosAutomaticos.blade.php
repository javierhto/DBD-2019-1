@extends('layouts.layoutAlumno')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    HORARIO
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
                              <td class="align-middle"> 
                                Codigo 
                              </td>
                              <td class="align-middle"> 
                                Asignatura
                              </td>
                              <td class="align-middle"> 
                                horario/Profesor
                              </td>
                            </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                          @foreach ($asignaturas as $asignatura)
                            <tr>

                              <td class="align-middle">
                                {{ $asignatura->id_asignatura }} <br>       
                              </td>

                              <td class="align-middle">
                                {{ $asignatura->nombre }}
                              </td>
                              <td class="align-middle">
                                @foreach ($coordinaciones as $coordinacion)
                                  @if($coordinacion->id_asignatura == $asignatura->id_asignatura)
                                    
                                      @foreach ($horarios as $horario)
                                        @if($coordinacion->id == $horario->id_coordinacion)
                                          -  {{$horario->dia}} bloque {{$horario->bloque}} / profesor: 
                                            @foreach ($profesores as $profesor)
                                              @if($coordinacion->id == $profesor->id_coordinacion)
                                                {{$profesor->nombre}} <br>

                                              @endif
                                            @endforeach
                                        @endif
                                      @endforeach
                                  @endif
                                @endforeach
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table> 
                      </center>
                      <br>
                      {{$bandera="-"}}Una opcion de horarios posible es: 
                      
                       <div class="table-responsive">
                      <center>
                        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <td class="align-middle"> Bloques </td>
                                    <td class="align-middle"> Lunes </td>
                                    <td class="align-middle"> Martes </td>
                                    <td class="align-middle"> Miercoles </td>
                                    <td class="align-middle"> Jueves </td>
                                    <td class="align-middle"> Viernes </td>
                                    <td class="align-middle"> Sabado </td>
                                </tr>
                        </thead>
                        
                        
                        <tbody class="text-center align-middle">
                          @for($i = 1; $i<=9 ;$i++)
                            <tr>

                              <td class="align-middle"> Bloques {{ $i}} </td>
                              <td class="align-middle">
                                @foreach ($asignaturas as $asignatura)
                                  @foreach ($coordinaciones as $coordinacion)
                                    @if($coordinacion->id_asignatura == $asignatura->id_asignatura)
                                        @foreach ($horarios as $horario)
                                          @if($coordinacion->id == $horario->id_coordinacion)
                                            @if($horario->dia == 'lunes' && $horario->bloque == $i && $bandera == "-")
                                              codigo:{{ $coordinacion->id_asignatura }}
                                              <br>
                                              sala: {{ $horario->sala }} <br>
                                              {{$asignatura-> id_asignatura = "X"}}
                                              {{$bandera="X"}}
                                            @endif
                                          @endif
                                        @endforeach
                                    @endif
                                  @endforeach
                                @endforeach
                                {{$bandera = "-"}}
                              </td>


                              <td class="align-middle">
                                @foreach ($asignaturas as $asignatura)
                                  @foreach ($coordinaciones as $coordinacion)
                                    @if($coordinacion->id_asignatura == $asignatura->id_asignatura)
                                      
                                        @foreach ($horarios as $horario)
                                          @if($coordinacion->id == $horario->id_coordinacion)
                                            @if($horario->dia == 'martes' && $horario->bloque == $i  && $bandera == "-")
                                              codigo:{{ $coordinacion->id_asignatura }}
                                              <br>
                                              sala: {{ $horario->sala }} <br>
                                              {{$asignatura-> id_asignatura = "X"}}
                                              {{$bandera = "X"}}
                                            @endif
                                          @endif
                                        @endforeach
                                    @endif
                                  @endforeach
                                @endforeach
                                {{$bandera = "-"}}

                              </td>


                              <td class="align-middle">
                                  @foreach ($asignaturas as $asignatura)
                                  @foreach ($coordinaciones as $coordinacion)
                                    @if($coordinacion->id_asignatura == $asignatura->id_asignatura)
                                      
                                        @foreach ($horarios as $horario)
                                          @if($coordinacion->id == $horario->id_coordinacion)
                                            @if($horario->dia == 'miercoles' && $horario->bloque == $i && $bandera == "-")
                                              codigo:{{ $coordinacion->id_asignatura }}
                                              <br>
                                              sala: {{ $horario->sala }} <br>
                                              {{$asignatura-> id_asignatura = "X"}}
                                              {{$bandera = "X"}}
                                            @endif
                                          @endif
                                        @endforeach
                                    @endif
                                  @endforeach
                                @endforeach
                                {{$bandera = "-"}}
                               </td>


                              <td class="align-middle"> 
                                @foreach ($asignaturas as $asignatura)
                                  @foreach ($coordinaciones as $coordinacion)
                                    @if($coordinacion->id_asignatura == $asignatura->id_asignatura)
                                      
                                        @foreach ($horarios as $horario)
                                          @if($coordinacion->id == $horario->id_coordinacion)
                                            @if($horario->dia == 'jueves' && $horario->bloque == $i && $bandera == "-")
                                              codigo:{{ $coordinacion->id_asignatura }}
                                              <br>
                                              sala: {{ $horario->sala }} <br>
                                              {{$asignatura-> id_asignatura = "X"}}
                                              {{$bandera = "X"}}
                                            @endif
                                          @endif
                                        @endforeach
                                    @endif
                                  @endforeach
                                @endforeach
                                {{$bandera = "-"}}

                              </td>
                              <td class="align-middle"> 
                                  @foreach ($asignaturas as $asignatura)
                                  @foreach ($coordinaciones as $coordinacion)
                                    @if($coordinacion->id_asignatura == $asignatura->id_asignatura)
                                      
                                        @foreach ($horarios as $horario)
                                          @if($coordinacion->id == $horario->id_coordinacion)
                                            @if($horario->dia == 'viernes' && $horario->bloque == $i && $bandera == "-")
                                              codigo:{{ $coordinacion->id_asignatura }}
                                              <br>
                                              sala: {{ $horario->sala }} <br>
                                              {{$asignatura-> id_asignatura = "X"}}
                                              {{$bandera = "X"}}
                                            @endif
                                          @endif
                                        @endforeach
                                    @endif
                                  @endforeach
                                @endforeach
                                {{$bandera = "-"}}
                                  
                               </td>
                              <td class="align-middle"> 
                                  @foreach ($asignaturas as $asignatura)
                                  @foreach ($coordinaciones as $coordinacion)
                                    @if($coordinacion->id_asignatura == $asignatura->id_asignatura)
                                      
                                        @foreach ($horarios as $horario)
                                          @if($coordinacion->id == $horario->id_coordinacion)
                                            @if($horario->dia == 'sabado' && $horario->bloque == $i && $bandera == "-")
                                              codigo:{{ $coordinacion->id_asignatura }}
                                              <br>
                                              sala: {{ $horario->sala }} <br>                                  
                                              {{$asignatura-> id_asignatura = "X"}}
                                              {{$bandera = "X"}}
                                            @endif
                                          @endif
                                        @endforeach
                                    @endif
                                  @endforeach
                                @endforeach
                                {{$bandera = "-"}}
                               </td>

                            </tr>
                          @endfor
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