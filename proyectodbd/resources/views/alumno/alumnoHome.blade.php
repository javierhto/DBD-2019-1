@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inicio de Alumno </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido Alumno, su numero de telefono es:  {{ Auth::user()->celular }}

                    <br><a class="navbar-brand" href="{{ url('/alumno/alumnoHorario') }}">
                         VER HORARIO
                    
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection