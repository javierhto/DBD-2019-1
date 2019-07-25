@extends('layouts.layoutAdmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresar Asignatura </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form action="{{route('GuardaAsignatura')}}" method="post" >
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                            <strong> nombre </strong>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> Nivel </strong>
                            <input type="text" name="nivel" class="form-control" placeholder="Nivel" required>
                        </div>
                        <div class="col-md-12">
                            <strong> T </strong>
                            <input type="text" name="T" class="form-control" placeholder="T" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> E </strong>
                            <input type="text" name="E" class="form-control" placeholder="E" required>
                        </div>
                        <div class="col-md-12">
                            <strong> L </strong>
                            <input type="text" name="L" class="form-control" placeholder="L" required> 
                        </div>                


                            <a href="{{route('AdminAsignaturas')}}" class="btn btn-sm btn-success"> Atras </a>
                            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection