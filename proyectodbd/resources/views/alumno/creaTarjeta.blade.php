@extends('layouts.layoutAlumno')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresar tarjeta </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form action="{{route('guardarTarjeta', Auth::user()->id)}}" method="post" >
                    @csrf
                    <div class="row">


                        <div class="col-md-12">
                            <strong> Número </strong>
                            <input type="number" name="numero" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> Nombre titular </strong>
                            <input type="text" name="nombre_titular" class="form-control" placeholder="Nombre" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> Pais </strong>
                            <input type="text" name="pais_facturacion" class="form-control" placeholder="país" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> Cuidad </strong>
                            <input type="text" name="ciudad_facturacion" class="form-control" placeholder="ciudad" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> Direccion </strong>
                            <input type="text" name="direccion_facturacion" class="form-control" placeholder="Direccion" required>
                        </div>
                        
                        <div class="col-md-12">
                            <strong> Fecha expiración </strong>
                            <input type="text" name="fecha_expiracion" class="form-control" placeholder="aaaa-mm-dd" required>
                        </div>

                    
                </form>
                        <a href="#" class="btn btn-sm btn-success"> Atras </a>
                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection