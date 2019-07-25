@extends('layouts.layoutAdmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Actualizar Administrador
                </div>
                	<div class="card-body">            
                    <form action="/admin/adminModificaAdministrador/{{ $administrador->id }}" method="post">
 					            
  						        @csrf          			
                      @method('PUT')

                    <div class="form-group row">                    
                      <label for="nombre" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Nombre: ') }}
                      </label>
                      <div class="col-md-8">
                          <input id="nombre" name="nombre" type="text" class="form-control"  value="{{ $administrador->nombre }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group row">                    
                      <label for="email" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Email:') }}
                      </label>
                      <div class="col-md-8">
                          <input id="email" name="email" type="text" class="form-control"  value="{{ $administrador->email }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group row">                    
                      <label for="fecha_nacimiento" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Fecha de ingreso') }}
                      </label>
                      <div class="col-md-8">
                          <input id="fecha_ingreso" name="fecha_ingreso" type="text" class="form-control"  value="{{ $administrador->fecha_ingreso }}" required autofocus>
                      </div>
                    </div>
          				  <div class="form-group row">
          					<label for="comuna" class="col-sm-3 col-form-label text-md-center">
              					{{ __('Comuna') }}
            				</label>
            				<div class="col-md-8">
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
            				<label for="direccion" class="col-sm-3 col-form-label text-md-center">
              					{{ __('Direccion') }}
            				</label>
            				<div class="col-md-8">
                				<input id="direccion" name="direccion" type="text" class="form-control"  value="{{ $administrador->direccion }}" required autofocus>
            				</div>
			          	</div>

						      <div class="form-group row">
            				<label for="celular" class="col-sm-3 col-form-label text-md-center">
              					{{ __('Celular') }}
            				</label>
            				<div class="col-md-8">
                				<input id="celular" name="celular" type="text" class="form-control" value="{{ $administrador-> celular }}" required autofocus>
            				</div>
          				</div>


                  <div class="form-group row">
                    <label for="fecha_ingreso" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Fecha ingreso') }}
                    </label>
                    <div class="col-md-8">
                        <input id="fecha_ingreso" name="fecha_ingreso" type="text" class="form-control" value="{{ $administrador->fecha_ingreso }}" required autofocus>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="situacion" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Situacion') }}
                    </label>
                    <div class="col-md-8">
                        <select id="situacion" name="situacion" class="form-control selectpicker custom-select" required >                                                              
                              <option value="regular">
                                  REGULAR
                              </option>                                
                              <option value="retirado">
                                  RETIRADO
                              </option>
                      </select>
                    </div>
                  </div>
                  


        				<div class="modal-footer">
	          				<button type="submit" class="btn btn-success btn-galaxy">
	          					Guardar cambios
	          				</button>
	          				
	          				<button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal" onClick= "window.location='{{ url("/admin/adminAdministradores") }}' ">
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