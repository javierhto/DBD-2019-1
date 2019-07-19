@extends('layouts.homeAdmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de alumnos </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="col-sm-2">
                    <a class="btn btn-sm btn-success" href="{{ route('admin.AdminCreaAlumno')}}"> Crear Alumno </a>
                </div>


                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "50px"><b> NO. </b></th> 
                        <th width = "300px"><b> Nombre Alumno </b></th>
                        <th ><b> Correo </b></th>
                        <th width = "180px"><b> Accion </b></th>
                    </tr>
                    

                    @foreach($alumnos as $alumno)
                        <tr>
                            <td ><b> {{++$i}}. </b></td> 
                            <td > {{ $alumno->nombre }} </td>
                            <td > {{ $alumno->correo }} </td>
                            <td > 
                            <form class="" action="{{route('admin.eliminarAlumno',$alumno->id }}" method="post">
                                <a class="btn btn-success" href="{{route('admin.mostrarAlumnos',$alumno->id)}}"> MOSTRAR </a>
                                <a class="btn btn-sm-warning" href="{{route('admin.editarAlumnos',$alumno->id)}}"> EDITAR </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"> ELIMINAR </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </table>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

