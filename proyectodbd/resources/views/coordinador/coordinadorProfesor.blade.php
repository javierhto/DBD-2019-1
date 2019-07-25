@extends('layouts.layoutCoordinador')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Profesores </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="col-sm-5">
                    <a class="btn btn-sm btn-success" href="{{ route('coordCreaProfesor')}}"> Crear Profesor </a>
                </div>


                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "50px"><b> NO. </b></th> 
                        <th width = "200px"><b> Nombre Profesor </b></th>
                        <th ><b> Correo </b></th>
                        <th width = "200px"><b> Accion </b></th>
                    </tr>
                    

                    @foreach($profesores as $profesor)
                        <tr>
                            <td ><b> {{++$i}}. </b></td> 
                            <td > {{ $profesor->nombre }} </td>
                            <td > {{ $profesor->email }} </td>
                            <td > 
                                <a class="btn btn-success" href="{{route('coordMostrarProfesor',$profesor->id)}}">    MOSTRAR 
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>                
                {!!$profesores->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection