@extends('layouts.layoutAdmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de coordinaciones </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="col-sm-5">

                    <a class="btn btn-sm btn-success" href="{{route('AdminCreaCoordinacion',$asignatura->id)}}"> 
                        Crear coordinacion  
                    </a>
                </div>


                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "200px"><b> Profesor </b></th>
                        <th width = "200px"><b> Accion </b></th>
                    </tr>
                    @foreach($coordinaciones as $coordinacion)
                        <tr>
                            <td>
                            @foreach($profesores as $profesor)
                                    @if($coordinacion->id_profesor == $profesor->id)
                                            {{$profesor->nombre}}
                                    @endif
                            @endforeach
                            </td>
                            <td> 
                                <form action="{{ route('eliminarCoordinacion', $coordinacion->id) }}" method="post">
                                    <a class="btn btn-success" href="{{route('mostrarCoordinacion',$coordinacion->id)}}">    MOSTRAR 
                                    </a>
                                    <a class="btn btn-warning" href="{{route('modificarCoordinacion',$coordinacion->id)}}">
                                    EDITAR
                                </a>
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