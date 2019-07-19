@extends('layouts.homestudent')

@section('content')
<form class=""  action="{{URL::to('/alumno/alumnoArchivos')}}" enctype="multipart/form-data" method="post">
	<input type="file" name="image" value="">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<br>
	<button type="submit" name="button"> Subir archivo </button>
</form>
@endsection