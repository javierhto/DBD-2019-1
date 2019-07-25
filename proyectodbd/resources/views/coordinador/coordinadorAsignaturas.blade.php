@extends('layouts.layoutCoordinador')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de asignaturas </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="col-sm-5">
                    <a class="btn btn-sm btn-success" href="{{ route('CreaAsignaturaCoord')}}"> Crear asignatura </a>
                </div>


                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "50px"><b> NO. </b></th> 
                        <th width = "200px"><b> Nombre asignatura </b></th>
                        <th width = "300px"><b> Accion </b></th>
                    </tr>
                    

                    @foreach($asignaturas as $asignatura)
                        <tr>
                            <td ><b> {{++$i}}. </b></td> 
                            <td > {{ $asignatura->nombre }} </td>
                            <td > 
                            <form action="{{ route('eliminarAsignaturaCoord', $asignatura->id) }}" method="post">
                                <a class="btn btn-success" href="{{route('mostrarAsignaturaCoord',$asignatura->id)}}">    MOSTRAR 
                                </a>
                                <a class="btn btn-warning" href="{{route('modificarAsignaturaCoord',$asignatura->id)}}">
                                    EDITAR
                                </a>
                                <a class="btn btn-warning" href="{{route('CoordinacionCoord',$asignatura->id)}}">
                                    SECCIONES
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"> ELIMINAR </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </table>                
                {!!$asignaturas->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection