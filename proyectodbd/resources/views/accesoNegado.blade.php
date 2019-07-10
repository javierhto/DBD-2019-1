
@extends('layouts.error')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ALERTA</div>

                <div class="card-body">

                    acceso denegado, inicie sesion para ingresar a este sitio
                    <a href="{{url('/')}}">VOLVER</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
