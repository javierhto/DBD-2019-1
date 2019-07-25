@extends('layouts.layoutCoordinador')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles de la coordinacion </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Semestre: </strong> {{$coordinacion->semestre}}
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Laboratorio: </strong>
                                @if($coordinacion->laboratorio == 1)
                                    SI
                                @else
                                    NO
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Cupo: </strong> {{$coordinacion->cupo}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Profesor: </strong> 
                                @foreach($profesores as $profesor)
                                    @if($coordinacion->id_profesor == $profesor->id)
                                            {{$profesor->nombre}}
                                    @endif
                                @endforeach

                            </div>
                        </div>

                    <div class="col-md-12">
                        <table class="table table-hover table-sm">
                        <tr>
                            <th width = "200px"><b> Horario </b></th>
                            <th width = "200px"><b> Sala </b></th>
                            <th width = "200px"><b> Acción </b></th>
                        </tr>
                        @foreach($horariosEsp as $horario)
                        <tr>
                            <td>
                            {{$horario->dia}} {{$horario->bloque}}
                            </td>
                            <td>
                            {{$horario->sala}}
                            </td>
                            <td> 
                                <form action="{{ route('eliminarHorarioCoord', ['id1' => $coordinacion->id, 'id2' => $horario->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"> ELIMINAR </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>


                <form action="{{route('GuardaHorarioCoord', $coordinacion->id)}}" method="post" >
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                        
                            <strong> Horario </strong>
                            <select id="id_horario" name="id_horario" class="form-control selectpicker custom-select" required >                              
                                @foreach ($horarios as $horario)
                                    <option value="{{ $horario->id }}">
                                        {{ $horario->dia }} {{ $horario->bloque }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <strong> Sala </strong>
                            <input type="text" name="sala" class="form-control" placeholder="Sala" required>
                        </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    </div>
                        </div>
                </form>




                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('CoordinacionCoord',$coordinacion->id_asignatura)}}" class="btn btn-sm btn-success">
                                    VOLVER
                                </a>
                            </div>
                        </div>

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection