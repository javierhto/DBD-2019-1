@extends('layouts.homestudent')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HORARIO</div>

                	<div class="card-body">
                    	@if (session('status'))
                        	<div class="alert alert-success" role="alert">
                            	{{ session('status') }}
                        	</div>
                    	@endif

                    	<div class="row">
            				@foreach($comunas as $comuna)
                				<div class="col-lg-4 col-md-6">
                    				<div class="box featured wow fadeInUp">
                        			<ul>
                            			<li><i class="ion-android-checkmark-circle"></i>Nombre: {{ $comuna->Nombre }}</li>
                            			<li><i class="ion-android-checkmark-circle"></i>Alumno: {{ $comuna->id_region }}</li>
                        			</ul>
				                    </div>
                				</div>
 		           			@endforeach
                		</div>
            		</div>
        	</div>
    	</div>
	</div>
</div>
@endsection