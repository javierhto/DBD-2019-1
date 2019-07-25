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