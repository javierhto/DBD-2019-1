@extends('layouts.layoutAlumno')
@section('content')
<div class="container">
    <form action="your-server-side-code" method="POST">
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_94y8bPMq5tuHqy476IOYnr2G00CiqFjKrv"
            data-amount="10000"
            data-name="Loa-Usach"
            data-description="Widget"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-currency="clp">
        </script>
    </form>
</div>
@endsection