@extends('layouts.layoutCoordinador')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Actualizar Asignaturas
                </div>
                	<div class="card-body">            
                    <form action="/coordinador/coordinadorModificaAsignatura/{{ $asignatura->id }}" method="post">
 					            
  						        @csrf          			
                      @method('PUT')

                    <div class="form-group row">                    
                      <label for="nombre" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Nombre: ') }}
                      </label>
                      <div class="col-md-8">
                          <input id="nombre" name="nombre" type="text" class="form-control"  value="{{ $asignatura->nombre }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group row">                    
                      <label for="nivel" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Nivel:') }}
                      </label>
                      <div class="col-md-8">
                          <input id="nivel" name="nivel" type="text" class="form-control"  value="{{ $asignatura->nivel }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group row">                    
                      <label for="T" class="col-sm-3 col-form-label text-md-center">
                          {{ __('T') }}
                      </label>
                      <div class="col-md-8">
                          <input id="T" name="T" type="text" class="form-control"  value="{{ $asignatura->T }}" required autofocus>
                      </div>
                    </div>          				  

          				<div class="form-group row">            				
            				<label for="E" class="col-sm-3 col-form-label text-md-center">
              					{{ __('E') }}
            				</label>
            				<div class="col-md-8">
                				<input id="E" name="E" type="text" class="form-control"  value="{{ $asignatura->E }}" required autofocus>
            				</div>
			          	</div>

          				<div class="form-group row">
            				<label for="L" class="col-sm-3 col-form-label text-md-center">
				            	{{ __('L') }}
            				</label>
            				<div class="col-md-8">
                				<input id="L" name="L" type="text" class="form-control" value="{{ $asignatura->L }}" required autofocus>
            				</div>
          				</div>

						      
        				<div class="modal-footer">
	          				<button type="submit" class="btn btn-success btn-galaxy">
	          					Guardar cambios
	          				</button>
	          				
	          				<button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal" onClick= "window.location='{{ url("/coordinador/coordinadorAsignaturas") }}' ">
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