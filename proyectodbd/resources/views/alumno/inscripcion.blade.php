@extends('layouts.layoutAlumno')
 
@section('content')
<div class="container">
            <div class="card">
                
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
                                    <td class="align-middle"> Ramos a inscribir </td>
                                    <td class="align-middle"> Horario </td>
                                    <td class="align-middle"> Desencribir </td>
                                </tr>
                        </thead>
                        <tbody class="text-center align-middle">

                                <td class="align-middle">

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
                                    
                                      @foreach ($horarios2 as $horario)
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

                                </td>
                                
















                                <td class="align-middle">
                                        


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

                                @foreach ($horarios as $horario)                      
                                  @if($horario->dia == 'lunes' && $horario->bloque == $i)
                                    codigo:{{ $horario->id_asignatura }}             
                                    <br>
                                    sala: {{ $horario->sala }} <br>
                                  
                                  @endif
                                @endforeach
                                   
                              </td>
                              <td class="align-middle">
                                @foreach ($horarios as $horario)                      
                                  @if($horario->dia == 'martes' && $horario->bloque == $i)                  
                                    codigo:{{ $horario->id_asignatura }}             
                                    <br>
                                    sala: {{ $horario->sala }} <br>
                                      
                                  @endif
                                @endforeach

                              </td>
                              <td class="align-middle">
                                  @foreach ($horarios as $horario)                      
                                  @if($horario->dia == 'miercoles' && $horario->bloque == $i)                  
                                    codigo:{{ $horario->id_asignatura }}             
                                    <br>
                                    sala: {{ $horario->sala }} <br>
                                  
                                  @endif
                                @endforeach
                               </td>


                              <td class="align-middle"> 
                                  @foreach ($horarios as $horario)                      
                                  @if($horario->dia == 'jueves' && $horario->bloque == $i)                  
                                    codigo:{{ $horario->id_asignatura }}             
                                    <br>
                                    sala: {{ $horario->sala }} <br>
                                    
                                  @endif
                                @endforeach
                              </td>
                              <td class="align-middle"> 

                                  @foreach ($horarios as $horario)                      
                                  @if($horario->dia == 'viernes' && $horario->bloque == $i)  
                                    codigo:                 
                                    codigo:{{ $horario->id_asignatura }}             
                                    <br>
                                    sala: {{ $horario->sala }} <br>
                                  
                                  @endif
                                @endforeach
                               </td>
                              <td class="align-middle"> 
                                  @foreach ($horarios as $horario)                      
                                  @if($horario->dia == 'sabado' && $horario->bloque == $i)                  
                                    codigo:{{ $horario->id_asignatura }}             
                                    <br>
                                    sala: {{ $horario->sala }} <br>
                                  
                                  @endif
                                @endforeach
                               </td>

                            </tr>
                          @endfor
                        </tbody>
                      </table> 
                      </center>
                    </div>


                      <br>
                      <br>
                      <div class="table-responsive">
                      <center>
                        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <td class="align-middle"> Codigo </td>
                                    <td class="align-middle"> Asignatura </td>
                                    <td class="align-middle"> T-E-L </td>                                  
                                </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                          @foreach ($horarios as $horario)
                            <tr>

                              <td class="align-middle">
                                {{ $horario->id_asignatura }} <br>       
                              </td>

                              <td class="align-middle">
                                {{ $horario->nombre }}
                              </td>

                              <td class="align-middle">
                                {{ $horario->T }}-{{ $horario->E }}-{{ $horario->L }}
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table> 
                      </center>
                    </div> 

                                     </td>
                                     <td>
                                            <div class="table-responsive">
                      <center>
                        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <td class="align-middle"> Codigo </td>
                                    <td class="align-middle"> Asignatura </td>
                                    <td class="align-middle"> desencribir </td>                                  
                                </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                          @foreach ($horarios as $horario)
                            <tr>

                              <td class="align-middle">
                                {{ $horario->id_asignatura }} <br>       
                              </td>

                              <td class="align-middle">
                                {{ $horario->nombre }}
                              </td>

                              <td class="align-middle">
                                <form action="/alumno/eliminarRamo/{{Auth::user()->id}}/{{$horario->id_coordinacion}}" method="post">
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"> ELIMINAR  </button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table> 
                      </center>
                    </div>                                          
                                     </td>

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