@extends('layouts.layoutAlumno')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	MIS DATOS Curriculares: 
                </div>
                <div class="card-body">
					<div class="form-group row">			
           				<div class="col-sm-4 col-form-label  text-md-right">
          					{{ __('Numero de matricula: ') }}
          				</div>
            			<div class="col-sm-4 col-form-label">
                			{{Auth::user()->numero_matricula}}
            			</div>
			        </div>
                
					<div class="form-group row">			
           				<div class="col-sm-4  text-md-right">
          					{{ __('Situación: ') }}
          				</div>

            			<div class="col-sm-4">
                			{{Auth::user()->situacion}}
            			</div>
			        </div>
			        <div class="form-group row">			
           				<div class="col-sm-4  text-md-right">
          					{{ __('Año de ingreso: ') }}
          				</div>
            			<div class="col-sm-4">
                			{{Auth::user()->ano_ingreso}}
            			</div>
			        </div>


			        <div class="form-group row">			
           				<div class="col-sm-4  text-md-right">
          					{{ __('Última matricula: ') }}
          				</div>
            			<div class="col-sm-4">
                			{{Auth::user()->ultima_matricula}}
            			</div>
			        </div>

			        <div class="form-group row">			
           				<div class="col-sm-4  text-md-right">
          					{{ __('Nivel actual: ') }}
          				</div>
            			<div class="col-sm-4">
                			{{Auth::user()->nivel_actual}}
            			</div>
			        </div>
              <div class="form-group row">      
                  <div class="col-sm-4  text-md-right">
                    {{ __('Eficiencia: ') }}
                  </div>
                  <div class="col-sm-4">
                      {{Auth::user()->eficiencia}}
                  </div>
              </div>
              <div class="form-group row">      
                  <div class="col-sm-4  text-md-right">
                    {{ __('Avance: ') }}
                  </div>

                  <div class="col-sm-4">
                      {{Auth::user()->avance}}
                  </div>
              </div>
              <div class="form-group row">      
                  <div class="col-sm-4  text-md-right">
                    {{ __('Asignturas Aprobadas: ') }}
                  </div>

                  <div class="col-sm-4">
                      {{Auth::user()->asignaturas_aprobadas}}
                  </div>
              </div>
              <div class="form-group row">      
                  <div class="col-sm-4  text-md-right">
                    {{ __('PPA: ') }}
                  </div>

                  <div class="col-sm-4">
                      {{Auth::user()->PPA}}
                  </div>
              </div>

			    </div>                    
            </div>
        </div>
    </div>
</div>
 @endsection