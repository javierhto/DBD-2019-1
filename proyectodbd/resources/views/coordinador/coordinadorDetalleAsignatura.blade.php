@extends('layouts.layoutCoordinador')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles de la asignatura </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Nombre: </strong> {{$asignatura->nombre}}
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Nivel: </strong> {{$asignatura->nivel}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> T: </strong> {{$asignatura->E}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> E: </strong> {{$asignatura->E}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> L: </strong> {{$asignatura->L}}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Agregar secciones </strong> 
                            </div>
                        </div>

                        
                        

                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('AsignaturasCoord')}}" class="btn btn-sm btn-success">
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