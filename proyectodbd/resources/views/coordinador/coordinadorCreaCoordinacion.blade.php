@extends('layouts.layoutCoordinador')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresar coordinacion de asignatura {{$asignatura->nombre}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form action="{{route('GuardaCoordinacionCoord',$asignatura->id)}}" method="post" >
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                            <strong> semestre </strong>
                            <input type="text" name="semestre" class="form-control" placeholder="Semestre" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> cupo </strong>
                            <input type="text" name="cupo" class="form-control" placeholder="Cupo" required>
                        </div>
                        <div class="col-md-12">
                            <strong> Profesor </strong>
                            <select id="id_profesor" name="id_profesor" class="form-control selectpicker custom-select" required >                              
                                @foreach ($profesores as $profesor)
                                    <option value="{{ $profesor->id }}">
                                        {{ $profesor->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        
                        
                        <div class="col-md-12">
                            <strong> laboratorio </strong>
                            <select id="laboratorio" name="laboratorio" class="form-control selectpicker custom-select" required >                                                              
                                    <option value="1">
                                        Si
                                    </option>                                
                                    <option value="0">
                                        No
                                    </option>
                            </select>
                        </div>                        

                            <a href="{{route('CoordinacionCoord',$asignatura->id)}}" class="btn btn-sm btn-success"> Atras </a>
                            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection