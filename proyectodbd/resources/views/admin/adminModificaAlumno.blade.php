@extends('layouts.layoutAdmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Actualizar Alumno
                </div>
                	<div class="card-body">            
                    <form action="/admin/adminModificaAlumno/{{ $alumno->id }}" method="post">
 					            
  						        @csrf          			
                      @method('PUT')

                    <div class="form-group row">                    
                      <label for="nombre" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Nombre: ') }}
                      </label>
                      <div class="col-md-8">
                          <input id="nombre" name="nombre" type="text" class="form-control"  value="{{ $alumno->nombre }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group row">                    
                      <label for="email" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Email:') }}
                      </label>
                      <div class="col-md-8">
                          <input id="email" name="email" type="text" class="form-control"  value="{{ $alumno->email }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group row">                    
                      <label for="fecha_nacimiento" class="col-sm-3 col-form-label text-md-center">
                          {{ __('Fecha de nacimiento') }}
                      </label>
                      <div class="col-md-8">
                          <input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="form-control"  value="{{ $alumno->fecha_nacimiento }}" required autofocus>
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
                				<input id="direccion" name="direccion" type="text" class="form-control"  value="{{ $alumno->direccion }}" required autofocus>
            				</div>
			          	</div>

          				<div class="form-group row">
            				<label for="telefono" class="col-sm-3 col-form-label text-md-center">
				            	{{ __('Telefono') }}
            				</label>
            				<div class="col-md-8">
                				<input id="telefono" name="telefono" type="text" class="form-control" value="{{ $alumno-> telefono }}" required autofocus>
            				</div>
          				</div>
                  <div class="form-group row">
                    <label for="numero_matricula" class="col-sm-3 col-form-label text-md-center">
                      {{ __('Nro de matricula') }}
                    </label>
                    <div class="col-md-8">
                        <input id="numero_matricula" name="numero_matricula" type="text" class="form-control" value="{{ $alumno-> numero_matricula }}" required autofocus>
                    </div>
                  </div>

						      <div class="form-group row">
            				<label for="celular" class="col-sm-3 col-form-label text-md-center">
              					{{ __('Celular') }}
            				</label>
            				<div class="col-md-8">
                				<input id="celular" name="celular" type="text" class="form-control" value="{{ $alumno-> celular }}" required autofocus>
            				</div>
          				</div>

                  <div class="form-group row">
                    <label for="situacion" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Jornada') }}
                    </label>
                    <div class="col-md-8">
                        <select id="jornada" name="jornada" class="form-control selectpicker custom-select" required>
                          <option value="diurno">
                              DIURNO
                          </option>                                
                          <option value="vespertino">
                              VESPERTINO
                          </option>
                        </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ano_ingreso" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Año ingreso') }}
                    </label>
                    <div class="col-md-8">
                        <input id="ano_ingreso" name="ano_ingreso" type="text" class="form-control" value="{{ $alumno-> ano_ingreso }}" required autofocus>
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
                                    <option value="egresado">
                                        EGRESADO
                                    </option>
                            </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ano_ingreso" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Ultima Matricula') }}
                    </label>
                    <div class="col-md-8">
                        <input id="ultima_matricula" name="ultima_matricula" type="text" class="form-control" value="{{ $alumno-> ultima_matricula }}" required autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nivel_actual" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Nivel actual') }}
                    </label>
                    <div class="col-md-8">
                        <input id="nivel_actual" name="nivel_actual" type="text" class="form-control" value="{{ $alumno-> nivel_actual }}" required autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="avance" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Avance') }}
                    </label>
                    <div class="col-md-8">
                        <input id="avance" name="avance" type="text" class="form-control" value="{{ $alumno-> avance }}" required autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="eficiencia" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Eficiencia') }}
                    </label>
                    <div class="col-md-8">
                        <input id="eficiencia" name="eficiencia" type="text" class="form-control" value="{{ $alumno-> eficiencia }}" required autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="PPA" class="col-sm-3 col-form-label text-md-center">
                        {{ __('PPA') }}
                    </label>
                    <div class="col-md-8">
                        <input id="PPA" name="PPA" type="text" class="form-control" value="{{ $alumno-> PPA }}" required autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="asignaturas_aprobadas" class="col-sm-3 col-form-label text-md-center">
                        {{ __('Asignaturas aprobadas') }}
                    </label>
                    <div class="col-md-8">
                        <input id="asignaturas_aprobadas" name="asignaturas_aprobadas" type="text" class="form-control" value="{{ $alumno-> asignaturas_aprobadas }}" required autofocus>
                    </div>
                  </div>


        				<div class="modal-footer">
	          				<button type="submit" class="btn btn-success btn-galaxy">
	          					Guardar cambios
	          				</button>
	          				
	          				<button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal" onClick= "window.location='{{ url("/admin/adminAlumnos") }}' ">
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