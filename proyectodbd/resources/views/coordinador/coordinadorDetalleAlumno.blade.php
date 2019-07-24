@extends('layouts.layoutCoordinador')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del alumno </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Nombre: </strong> {{$alumno->nombre}}
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Correo: </strong> {{$alumno->email}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Direccion: </strong> {{$alumno->direccion}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Fecha de Nacimiento: </strong> {{$alumno->fecha_nacimiento}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Telefono: </strong> {{$alumno->telefono}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Celular: </strong> {{$alumno->celular}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Jornada: </strong> {{$alumno->jornada}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Situacion: </strong> {{$alumno->situacion}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Año de ingreso: </strong> {{$alumno->ano_ingreso}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Ultima matricula: </strong> {{$alumno->ultima_matricula}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Nivel actual: </strong> {{$alumno->nivel_actual}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Avance: </strong> {{$alumno->avance}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Eficiencia: </strong> {{$alumno->eficiencia}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> Asignaturas Aprobadas: </strong> {{$alumno->asignaturas_aprobadas}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong> PPA: </strong> {{$alumno->PPA}}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('coordinadorAlumnos')}}" class="btn btn-sm btn-success">
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