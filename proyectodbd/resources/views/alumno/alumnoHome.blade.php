@extends('layouts.layoutAlumno')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inicio de Alumno </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                    <div class="table-responsive">
                      <center>
                        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <td class="align-middle"> IZQ </td>
                                    <td class="align-middle"> DER </td>
                                </tr>
                        </thead>
                        <tbody class="text-center align-middle">

                                <td class="align-middle">DATOS IZQ </td>
                                <td class="align-middle">DATOS DER    </td>

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