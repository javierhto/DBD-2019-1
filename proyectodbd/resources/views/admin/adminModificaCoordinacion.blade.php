@extends('layouts.layoutAdmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Actualizar Coordinador docente
                </div>
                	<div class="card-body">            
                    <form action="/admin/adminModificaCoordinacion/{{$coordinacion->id }}" method="post">
 					            
  						        @csrf          			
                      @method('PUT')

                    <div class="form-group row">                    
                      <label for="semestre" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Semestre: ') }}
                      </label>
                      <div class="col-md-8">
                          <input id="semestre" name="semestre" type="text" class="form-control"  value="{{ $coordinacion->semestre }}" required autofocus>
                      </div>
                    </div>

                    <div class="form-group row">                    
                      <label for="cupo" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Cupo') }}
                      </label>
                      <div class="col-md-8">
                          <input id="cupo" name="cupo" type="text" class="form-control"  value="{{ $coordinacion->cupo }}" required autofocus>
                      </div>
                    </div>
          				  <div class="form-group row">
            					<label for="profesor" class="col-sm-3 col-form-label text-md-center">
                					{{ __('Profesor') }}
              				</label>
              				<div class="col-md-8">
                  				<select id="id_profesor" name="id_profesor" class="form-control selectpicker custom-select" required >                    			
                      				@foreach ($profesores as $profesor)
                      					<option value="{{ $profesor->id }}">
                        						{{ $profesor->nombre }}
                      					</option>
                      				@endforeach
                  				</select>
              			   </div>
          				  </div>
                  <div class="form-group row">
                    <label for="situacion" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Laboratorio') }}
                    </label>
                    <div class="col-md-8">
                        <select id="laboratorio" name="laboratorio" class="form-control selectpicker custom-select" required >                                                              
                              <option value="1">
                                  SI
                              </option>                                
                              <option value="0">
                                  NO
                              </option>
                      </select>
                    </div>
                  </div>

                                    
        				<div class="modal-footer">
	          				<button type="submit" class="btn btn-success btn-galaxy">
	          					Guardar cambios
	          				</button>
	          				
	          				<button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal" onClick= "window.location='{{ url("/admin/adminCoordinadores") }}' ">
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