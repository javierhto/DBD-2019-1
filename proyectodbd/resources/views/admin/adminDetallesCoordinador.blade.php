@extends('layouts.layoutAdmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del coordinador </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Nombre: </strong> {{$coordinador->nombre}}
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Correo: </strong> {{$coordinador->email}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Direccion: </strong> {{$coordinador->direccion}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Fecha de Nacimiento: </strong> {{$coordinador->fecha_nacimiento}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Telefono: </strong> {{$coordinador->telefono}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Celular: </strong> {{$coordinador->celular}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Jornada: </strong> {{$coordinador->jornada}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Situacion: </strong> {{$coordinador->situacion}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Año de ingreso: </strong> {{$coordinador->fecha_ingreso}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Estado de cuenta: </strong> {{$coordinador->estado_cuenta}}
                            </div>
                        </div>
                        

                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('AdminCoordinadores')}}" class="btn btn-sm btn-success">
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