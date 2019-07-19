@extends('layouts.layoutProfesor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    MENSAJES
                </div>
            	
                <div class="card-body">
                	@if (session('status'))
                    	<div class="alert alert-success" role="alert">
                        	{{ session('status') }}
                    	</div>
                	@endif
                
                    
                      <center>
                        
                      <div class="table-responsive">
                      <center>
                        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <td class="align-middle"> asunto </td>
                                    <td class="align-middle"> Remitente </td>
                                    <td class="align-middle"> Mensaje </td>                                  
                                </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                          @foreach ($mensajes as $mensaje)
                            <tr>

                              <td class="align-middle">
                                {{ $mensaje->asunto }} <br>       
                              </td>

                              <td class="align-middle">
                                {{ $mensaje->remitente }}
                              </td>

                              <td class="align-middle">
                                {{ $mensaje->contenido }}
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table> 
                      </center>
                    </div>                  
                </div>
        	</div>
    	</div>
	</div>
</div>
@endsection