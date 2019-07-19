@extends('layouts.homeAdmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crea Alumno </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form action="{{route('admin.GuardaAlumno')}}" method="post" >
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <strong> nombre </strong>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre"> 
                        </div>
                        <div class="col-md-12">
                            <strong> correo </strong>
                            <input type="text" name="email" class="form-control" placeholder="Nombre"> 
                        </div>
                        <div class="col-md-12">
                            <strong> celular </strong>
                            <input type="text" name="celular" class="form-control" placeholder="Nombre"> 
                        </div>
                        <div class="col-md-12">
                            <strong> contraseña </strong>
                            <input type="password" name="password" class="form-control" placeholder="Nombre"> 
                        </div>
                        <div class="col-md-12">
                            <a href="{{route(admin.AdminAlumnos)}}" class="btn btn-sm btn-success"> Atras </a>
                            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                </form>





                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection