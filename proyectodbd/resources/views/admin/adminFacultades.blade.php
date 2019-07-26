@extends('layouts.layoutAdmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de facultades </div>



                <div class="card-body">
                    dasldslñ
                </div> 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                <div class="col-sm-5">
                    <a class="btn btn-sm btn-success" href="{{ route('AdminCreaFacultad')}}"> Crear Facultad </a>
                </div>


                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "50px"><b> NO. </b></th> 
                        <th width = "200px"><b> Nombre facultad </b></th>
                        <th width = "300px"><b> Accion </b></th>
                    </tr>
                    

                    @foreach($facultades as $facultad)
                        <tr>
                            <td ><b> {{++$i}}. </b></td> 
                            <td > {{ $facultad->nombre }} </td>
                            <td > 
                            <form action="{{ route('eliminarFacultad', $facultad->id) }}" method="post">
                                <a class="btn btn-success" href="{{route('mostrarFacultad',$facultad->id)}}">    MOSTRAR 
                                </a>
                                <a class="btn btn-warning" href="{{route('modificarFacultad',$facultad->id)}}">
                                    EDITAR
                                </a>
                                <a class="btn btn-warning" href="{{route('AdminDepartamentos',$facultad->id)}}">
                                    DEPARTAMENTOS
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"> ELIMINAR </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </table>                
                {!!$facultads->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection