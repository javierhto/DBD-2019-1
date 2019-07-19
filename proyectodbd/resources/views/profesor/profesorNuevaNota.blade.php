@extends('layouts.homeProfesor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nueva Nota alumno:  {{ $alumno->nombre }}
                </div>            
                <div class="card-body">                  
                	@if (session('status'))
                    	<div class="alert alert-success" role="alert">
                        	{{ session('status') }}
                    	</div>
                	@endif               

                <form action="/profesor/profesorNuevaNota/{{$alumno->id}}/{{$coord->id}}" method="post">
                      @csrf               
                    <div class="form-group row">
                    <label for="tipo" class="col-sm-4 col-form-label text-md-right">
                        {{ __('Tipo de evaluacion: ') }}
                    </label>
                    <div class="col-md-6">
                        <select id="tipo" name="tipo" class="form-control selectpicker custom-select" required >                    
                          <option value="control">
                            CONTROL
                          </option>      
                          <option value="pa">
                            PA
                          </option>
                          <option value="pep">
                            PEP
                          </option>
                          <option value="presentacion">
                            PRESENTACION
                          </option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombre" class="col-sm-4 col-form-label text-md-right">
                        {{ __('Numero de evaluacion') }}
                    </label>
                    <div class="col-md-6">
                        <input id="nombre" name="nombre" type="text" class="form-control" value="1" required autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    
                    <label for="ponderacion" class="col-sm-4 col-form-label text-md-right">
                        {{ __('Ponderacion: ') }}
                    </label>

                    <div class="col-md-6">
                        <input id="ponderacion" name="ponderacion" type="text" class="form-control"  value="0.3" required autofocus>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nota" class="col-sm-4 col-form-label text-md-right">
                      {{ __('Nota') }}
                    </label>
                    <div class="col-md-6">
                        <input id="nota" name="nota" type="text" class="form-control" value="7.0" required autofocus>
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