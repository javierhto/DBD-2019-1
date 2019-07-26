@extends('layouts.layoutAlumno')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tarjetas de crédito</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="col-sm-5">
                    <a class="btn btn-sm btn-success" href="{{ route('crearTarjeta')}}"> Agregar tarjeta </a>
                </div>


                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "250px"><b> NO. tarjeta </b></th> 
                        <th width = "200px"><b> titular </b></th>
                        <th width = "200px"><b> Accion </b></th>
                    </tr>
                    

                    @foreach($tarjetas as $tarjeta)
                        <tr>
                            <td > {{ $tarjeta->numero }} </td>
                            <td > {{ $tarjeta->nombre_titular }} </td>
                            <td > 
                                <form method="post" action="{{ route('eliminarTarjeta', $tarjeta->id)}}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Eliminar">
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