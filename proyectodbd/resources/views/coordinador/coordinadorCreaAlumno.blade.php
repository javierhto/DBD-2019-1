@extends('layouts.layoutCoordinador')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresar Alumno </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form action="{{route('coordGuardaAlumno')}}" method="post" >
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                            <strong> nombre </strong>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> Direccion </strong>
                            <input type="text" name="direccion" class="form-control" placeholder="Direccion" required>
                        </div>
                        <div class="col-md-12">
                            <strong> Comuna </strong>
                            <select id="id_comuna" name="id_comuna" class="form-control selectpicker custom-select" required >                              
                                @foreach ($comunas as $comuna)
                                    <option value="{{ $comuna->id }}">
                                        {{ $comuna->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <strong> correo </strong>
                            <input type="text" name="email" class="form-control" placeholder="Correo" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> celular </strong>
                            <input type="text" name="celular" class="form-control" placeholder="Celular" required>
                        </div>
                        <div class="col-md-12">
                            <strong> Telefono </strong>
                            <input type="text" name="telefono" class="form-control" placeholder="Celular" required> 
                        </div>
                        <div class="col-md-12">
                            <strong> contraseña </strong>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="col-md-12">
                            <strong> Numero de matricula </strong>
                            <input type="text" name="numero_matricula" class="form-control" placeholder="Nro de matricula" required>
                        </div>
                        <div class="col-md-12">
                            <strong> fecha nacimiento </strong>
                            <input type="text" name="fecha_nacimiento" class="form-control" placeholder="aaaa-mm-dd" required>
                        </div>
                        
                        
                        
                        <div class="col-md-12">
                            <strong> jornada </strong>
                            <select id="jornada" name="jornada" class="form-control selectpicker custom-select" required >                                                              
                                    <option value="diurno">
                                        DIURNO
                                    </option>                                
                                    <option value="vespertino">
                                        VESPERTINO
                                    </option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <strong> situación </strong>
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
                        <div class="col-md-12">
                            <strong> Año de ingreso </strong>
                            <input type="text" name="ano_ingreso" class="form-control" placeholder="aaaa" required>
                        </div>
                        <div class="col-md-12">
                            <strong> ultima matricula </strong>
                            <input type="text" name="ultima_matricula" class="form-control" placeholder="aaaa-mm-dd" required>
                        </div>
                        <div class="col-md-12">
                            <strong> Nivel actual </strong>
                            <input type="text" name="nivel_actual" class="form-control" placeholder="Nivel actual" required>
                        </div>
                        <div class="col-md-12">
                            <strong> Avance </strong>
                            <input type="text" name="avance" class="form-control" placeholder="avance" required>
                        </div>
                        <div class="col-md-12">
                            <strong> Eficiencia </strong>
                            <input type="text" name="eficiencia" class="form-control" placeholder="eficiencia" required>
                        </div>
                        <div class="col-md-12">
                            <strong> Asignaturas aprobadas </strong>
                            <input type="text" name="asignaturas_aprobadas" class="form-control" placeholder="Asignaturas aprobadas" required>
                        </div>
                        <div class="col-md-12">
                            <strong> PPA </strong>
                            <input type="text" name="PPA" class="form-control" placeholder="PPA" required>
                        </div>


                            <a href="{{route('coordinadorAlumnos')}}" class="btn btn-sm btn-success"> Atras </a>
                            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection