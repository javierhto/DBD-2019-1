<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumno', 'AlumnoController')->parameters(['alumno' => 'id']);
Route::resource('administradorGeneral', 'AdministradorGeneralController')->parameters(['administradorGeneral'=> 'id']);
Route::resource('asignatura', 'AsignaturaController')->parameters(['asignatura' => 'id']);
Route::resource('carrera', 'CarreraController')->parameters(['carrera' => 'id']);
Route::resource('comuna', 'ComunaController')->parameters(['comuna' => 'id']);
Route::resource('coordinadorDocente', 'CoordinadorDocenteController')->parameters(['coordinadorDocente' => 'id']);
Route::resource('departamento', 'DepartamentoController')->parameters(['departamento' => 'id']);
Route::resource('evaluacion', 'EvaluacionController')->parameters(['evaluacion' => 'id']);
Route::resource('facturacion', 'FacturacionController')->parameters(['facturacion' => 'id']);
Route::resource('facultad', 'FacultadController')->parameters(['facultad' => 'id']);
Route::resource('historialAlumno', 'HistorialAlumnoController')->parameters(['historialAlumno' => 'id']);
Route::resource('historialProfesor', 'HistorialProfesorController')->parameters(['historialProfesor' => 'id']);
Route::resource('horario', 'HorarioController')->parameters(['horario' => 'id']);
Route::resource('mensaje', 'MensajeController')->parameters(['mensaje' => 'id']);
Route::resource('planDeEstudios', 'PlanDeEstudiosController')->parameters(['planDeEstudios' => 'id']);
Route::resource('prerequisito', 'PrerequisitoController')->parameters(['prerequisito' => 'id']);
Route::resource('profesor', 'ProfesorController')->parameters(['profesor' => 'id']);
Route::resource('region', 'RegionController')->parameters(['region' => 'id']);
Route::resource('registroDeAccion', 'RegistroDeAccionController')->parameters(['registroDeAccion' => 'id']);
Route::resource('tarjetaCredito', 'TarjetaCreditoController')->parameters(['tarjetaCredito' => 'id']);
