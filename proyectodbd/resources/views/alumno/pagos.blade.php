@extends('layouts.layoutAlumno')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Facturaciones pendientes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "250px"><b> Estado </b></th> 
                        <th width = "200px"><b> Fecha emisión </b></th>
                        <th width = "200px"><b> Fecha expiración </b></th>
                        <th width = "200px"><b> Monto </b></th>
                        <th width = "200px"><b> Acción </b></th>
                    </tr>
                    

                    @foreach($pendientes as $pendiente)
                        <tr>
                            <td ><strong>Pendiente</strong></td>
                            <td > {{ $pendiente->fecha }} </td>
                            <td > {{ $pendiente->fecha_expiracion }} </td>
                            <td > {{ $pendiente->monto }} </td>
                            <td > 
                            <form action="{{route('Pagar', $pendiente->id)}}" method="POST">
                                <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_94y8bPMq5tuHqy476IOYnr2G00CiqFjKrv"
                                    data-amount={{$pendiente->monto}}
                                    data-name="Loa-Usach"
                                    data-description="Pagar con tarjeta de crédito"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-currency="clp">
                                </script>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </table>                
                </div>
            </div>

            <div class="card">
                <div class="card-header">Facturaciones pagadas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <table class="table table-hover table-sm">
                    <tr>
                        <th width = "250px"><b> Estado </b></th> 
                        <th width = "200px"><b> Fecha emisión </b></th>
                        <th width = "200px"><b> Fecha expiración </b></th>
                        <th width = "200px"><b> Monto </b></th>
                    </tr>
                    

                    @foreach($pagadas as $pagada)
                        <tr>
                            <td ><strong>Cancelada</strong></td>
                            <td > {{ $pagada->fecha }} </td>
                            <td > {{ $pagada->fecha_expiracion }} </td>
                            <td > {{ $pagada->monto }} </td>
                        </tr>
                    @endforeach
                </table>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection