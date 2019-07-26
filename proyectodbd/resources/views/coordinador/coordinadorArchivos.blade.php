@extends('layouts.layoutCoordinador')

@section('content')
<form action="{{ route('fileUploadCoord') }}" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    	<input type="file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

<div class="row"> 
	<div class="table-responsive">
        <center>
            <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark text-center">
                    <tr>
                        <td class="align-middle"> Nombre </td>
                        <td class="align-middle"></td>
                    </tr>
                </thead>
                <tbody class="text-center align-middle">
                	@foreach($documentos as $documento)
                    <tr>
                        <td class="align-middle"> {{ $documento->nombre }} </td>
                        <td class="align-middle"><a href="{{ route('fileDownload', $documento->id) }}"> Descarga </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table> 
        </center>
    </div>
</div>
@endsection