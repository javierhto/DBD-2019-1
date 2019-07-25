@extends('layouts.layoutAdmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Administrador </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Nombre: </strong> {{$administrador->nombre}}
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Correo: </strong> {{$administrador->email}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Direccion: </strong> {{$administrador->direccion}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Celular: </strong> {{$administrador->celular}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Año de ingreso: </strong> {{$administrador->fecha_ingreso}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Jornada: </strong> {{$administrador->jornada}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Situacion: </strong> {{$administrador->situacion}}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('AdminAdministradores')}}" class="btn btn-sm btn-success">
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