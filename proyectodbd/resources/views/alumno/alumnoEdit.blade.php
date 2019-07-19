@extends('layouts.homestudent')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Actualizar Usuario: {{ Auth::user()->nombre }}
                </div>
                	<div class="card-body">
                    <form action="/alumno/alumnoEdit/{{ Auth::user()->id }}" method="post">
 					            @method('PATCH')
  						        @csrf          			
          				  <div class="form-group row">
          					<label for="comuna" class="col-sm-4 col-form-label text-md-right">
              					{{ __('Comuna') }}
            				</label>
            				<div class="col-md-6">
                				<select id="comuna_id" name="comuna_id" class="form-control selectpicker custom-select" required >                    			
                    				@foreach ($comunas as $comuna)
                    					<option value="{{ $comuna->id }}">
                      						{{ $comuna->nombre }}
                    					</option>
                    				@endforeach
                				</select>
            				</div>
          				</div>

          				<div class="form-group row">
            				
            				<label for="patente" class="col-sm-4 col-form-label text-md-right">
              					{{ __('Direccion') }}
            				</label>

            				<div class="col-md-6">
                				<input id="direccion" name="direccion" type="text" class="form-control"  value="{{ Auth::user()->direccion }}" required autofocus>
            				</div>
			          	</div>

          				<div class="form-group row">
            				<label for="telefono" class="col-sm-4 col-form-label text-md-right">
				            	{{ __('Telefono') }}
            				</label>
            				<div class="col-md-6">
                				<input id="telefono" name="telefono" type="text" class="form-control" value="{{ Auth::user()-> telefono }}" required autofocus>
            				</div>
          				</div>

						      <div class="form-group row">
            				<label for="celular" class="col-sm-4 col-form-label text-md-right">
              					{{ __('Celular') }}
            				</label>
            				<div class="col-md-6">
                				<input id="celular" name="celular" type="text" class="form-control" value="{{ Auth::user()-> celular }}" required autofocus>
            				</div>
          				</div>          
        				<div class="modal-footer">
	          				<button type="submit" class="btn btn-success btn-galaxy">
	          					Guardar cambios
	          				</button>
	          				
	          				<button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal" onClick='history.go(-1);'>
	          					Volver
	          				</button>
        				</div>      		
				    </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection