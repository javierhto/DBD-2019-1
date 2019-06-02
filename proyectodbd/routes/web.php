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

Route::resource('alumno', 'AlumnoController');
Route::resource('administradorGeneral', 'AdministradorGeneralController');
Route::resource('asignatura', 'AsignaturaController');
Route::resource('carrera', 'CarreraController');
Route::resource('comuna', 'ComunaController');
Route::resource('coordinadorDocente', 'CoordinadorDocenteController');
Route::resource('departamento', 'DepartamentoController');
Route::resource('evaluacion', 'EvaluacionController');
Route::resource('facturacion', 'FacturacionController');
Route::resource('facultad', 'FacultadController');
Route::resource('historialAlumno', 'HistorialAlumnoController');
Route::resource('historialProfesor', 'HistorialProfesorController');
Route::resource('horario', 'HorarioController');
Route::resource('mensaje', 'MensajeController');
Route::resource('planDeEstudios', 'PlanDeEstudiosController');
Route::resource('prerequisito', 'PrerequisitoController');
Route::resource('profesor', 'ProfesorController');
Route::resource('region', 'RegionController');
Route::resource('registroDeAccion', 'RegistroDeAccionController');
Route::resource('tarjetaCredito', 'TarjetaCreditoController');
