@extends('layouts.homeProfesor')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	MIS DATOS PERSONALES: 
                </div>
                <div class="card-body">
					<div class="form-group row">			
           				<div class="col-sm-4 col-form-label  text-md-right">
          					{{ __('Nombre: ') }}
          				</div>

            			<div class="col-sm-4 col-form-label">
                			{{Auth::user()->nombre}}
            			</div>
			        </div>
                
					<div class="form-group row">			
           				<div class="col-sm-4  text-md-right">
          					{{ __('Direccion: ') }}
          				</div>

            			<div class="col-sm-4">
                			{{Auth::user()->direccion}}
            			</div>
			        </div>
			        <div class="form-group row">			
           				<div class="col-sm-4  text-md-right">
          					{{ __('Correo: ') }}
          				</div>

            			<div class="col-sm-4">
                			{{Auth::user()->email}}
            			</div>
			        </div>

			        <div class="form-group row">			
           				<div class="col-sm-4  text-md-right">
          					{{ __('Telefono: ') }}
          				</div>

            			<div class="col-sm-4">
                			{{Auth::user()->telefono}}
            			</div>
			        </div>

			        <div class="form-group row">			
           				<div class="col-sm-4  text-md-right">
          					{{ __('Celular: ') }}
          				</div>

            			<div class="col-sm-4">
                			{{Auth::user()->celular}}
            			</div>
			        </div>

						 
             <div class="modal-footer" align="left">
                    <button type="button" class="button btn-success btn-galaxy" onclick="window.location='{{ url("/profesor/profesorEdit") }}'">
                    Editar Perfil
                  </button>
                </div>          

			    </div>                    
            </div>
        </div>
    </div>
</div>
 @endsection