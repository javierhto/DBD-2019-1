@extends('layouts.layoutAdmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Administradores generales </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="col-sm-5">
                    <a class="btn btn-sm btn-success" href="{{ route('AdminCreaAdministrador')}}">Crear administrador </a>
                </div>


                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "50px"><b> NO. </b></th> 
                        <th width = "200px"><b> Nombre administrador </b></th>
                        <th width = "300px"><b> Accion </b></th>
                    </tr>
                    

                    @foreach($administradores as $administrador)
                        <tr>
                            <td ><b> {{++$i}}. </b></td> 
                            <td > {{ $administrador->nombre }} </td>
                            <td > 
                            <form action="{{ route('eliminarAdministrador', $administrador->id) }}" method="post">
                                <a class="btn btn-success" href="{{route('mostrarAdministrador',$administrador->id)}}">    MOSTRAR 
                                </a>
                                <a class="btn btn-warning" href="{{route('modificarAdministrador',$administrador->id)}}">
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
                {!!$administradores->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection