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


/*
Route::resource('alumno', 'AlumnoController')->parameters(['alumno' => 'id']);
//Alumno->Carrera
//Route::resource('carrera/alumno', 'Alumno_CarreraController');

Route::resource('alumnoCarrera', 'AlumnoCarreraController')->parameters(['alumnoCarrera' => 'id']);
Route::resource('alumnoCoordinacion', 'AlumnoCoordinacionController')->parameters(['alumnoCoordinacion' => 'id']);
Route::resource('planDeEstudiosAsignatura', 'PlanDeEstudiosAsignaturaController')->parameters(['planDeEstudiosAsignatura' => 'id']);
//Route::resource('administradorGeneral', 'AdministradorGeneralController')->parameters(['administradorGeneral'=> 'id']);
Route::resource('asignatura', 'AsignaturaController')->parameters(['asignatura' => 'id']);
Route::resource('documento', 'DocumentoController')->parameters(['documento' => 'id']);
//Route::resource('carrera', 'CarreraController')->parameters(['carrera' => 'id']);
Route::resource('comuna', 'ComunaController')->parameters(['comuna' => 'id']);
Route::resource('coordinadorDocente', 'CoordinadorDocenteController')->parameters(['coordinadorDocente' => 'id']);
Route::resource('coordinacion', 'CoordinacionController')->parameters(['coordinacion' => 'id']);
Route::resource('coordinacionProfesor', 'CoordinacionProfesorController')->parameters(['coordinacionProfesor' => 'id']);
Route::resource('coordinacionHorario', 'CoordinacionHorarioController')->parameters(['coordinacionHorario' => 'id']);
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

//Route::resource('/carrera/alumno/{id_alumno}', 'CarreraController@alumno');

*/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accesoNegado', function () {
    return view('accesoNegado');
})->name('accesoNegado');



//Administrador
Route::get('admin/adminLogin','AdministradorGeneralController@showLoginForm');
Route::post('admin/adminLogin','AdministradorGeneralController@login');
//Rutas protegidas por guardian de admin (solo posibles acceder a ellas logeado como admin)
Route::group(['middleware' => ['auth:admin']], function() {
	Route::put('admin/adminEdit/{id}','AdministradorGeneralController@update');
	Route::get('admin/adminHome','AdministradorGeneralController@secret');
	Route::get('admin/adminEdit', 'AdministradorGeneralController@edit');
	Route::get('admin/adminPerfil', 'AdministradorGeneralController@perfil');
	Route::get('admin/adminDetallesAlumno/{id}', 'AdministradorGeneralController@MostrarAlumnos')->name('mostrarAlumnos');
	Route::get('admin/adminAlumnos', 'AdministradorGeneralController@Alumnos')->name('AdminAlumnos');
	Route::get('admin/adminCreaAlumno', 'AdministradorGeneralController@CreaAlumnos')->name('AdminCreaAlumno');
});


//Profesor
Route::get('profesor/profesorLogin','ProfesorController@showLoginForm');
Route::post('profesor/profesorLogin','ProfesorController@login');
//Rutas protegidas por guardian de profesor (solo posibles acceder a ellas logeado como profesor)
Route::group(['middleware' => ['auth:profesor']], function() {
	Route::put('profesor/profesorEdit/{id}','ProfesorController@update');
	Route::get('profesor/profesorHome','ProfesorController@secret');
	Route::get('profesor/profesorHorario/{id}','ProfesorController@horario')->name('HorarioProfe');
	Route::get('profesor/profesorCursos/{id}','ProfesorController@cursos')->name('CursosProfe');
	Route::get('profesor/profesorAdminCurso/{id}','ProfesorController@admincurso')->name('AdminCursoProfe');
	Route::get('profesor/profesorNuevaNota/{id_alumno}/{id_coordinacion}','ProfesorController@agregaNota')->name('NuevaNotaProfe');
	Route::put('profesor/profesorNuevaNota/{id_alumno}/{id_asignatura}','EvaluacionController@store');
	Route::get('profesor/profesorEdit', 'ProfesorController@edit');
	Route::get('/profesor/profesorMensajes/{id}', 'ProfesorController@BandejaEntrada')->name('BandejaEntradaProfe');
	Route::get('profesor/profesorPerfil', 'ProfesorController@perfil');
	Route::get('profesor/profesorExito', function () {
    	return view('profesor.profesorExito');	});
Route::get('/profesor/profesorError', function () {
    return view('profesor.profesorError');});	
});


//Alumno
Route::get('alumno/alumnoLogin','AlumnoController@showLoginForm');
Route::post('alumno/alumnoLogin','AlumnoController@login');
//Rutas protegidas por guardian de alumno (solo posibles acceder a ellas logeado como alumno)
Route::group(['middleware' => ['auth:alumno']], function() {
	Route::put('alumno/alumnoEdit/{id}','AlumnoController@update');
	Route::get('alumno/alumnoHome','AlumnoController@secret');
	Route::get('alumno/alumnoHorario/{id}','AlumnoController@horario')->name('Horario');
	Route::get('/alumno/alumnoEdit', 'AlumnoController@edit');
	Route::get('/alumno/alumnoPerfil', 'AlumnoController@perfil');
	Route::get('/alumno/alumnoDatos', 'AlumnoController@datos');
	Route::get('/alumno/alumnoCalificaciones/{id}', 'AlumnoController@calificaciones')->name('Historial');
	Route::get('/alumno/alumnoMensajes/{id}', 'AlumnoController@BandejaEntrada')->name('BandejaEntradaAlumno');

	Route::get('/alumno/alumnoArchivos','fileController@alumnoArchivos');
	Route::post('/alumno/alumnoArchivos','fileController@store');
	//Route::patch('/alumno/alumnoEdit/{id}','AlumnoController@update')->parameters(['alumno' => 'id']);;

});



//CoordinadorDocente
Route::get('coordinador/coordinadorLogin','CoordinadorDocenteController@showLoginForm');
Route::post('coordinador/coordinadorLogin','CoordinadorDocenteController@login');
//Rutas protegidas por guardian de Coordinador (solo posibles acceder a ellas logeado como Coordinador)
Route::group(['middleware' => ['auth:coordinador']], function() {
	Route::put('coordinador/coordinadorEdit/{id}','CoordinadorDocenteController@update');
	Route::get('coordinador/coordinadorHome','CoordinadorDocenteController@secret');
	Route::get('coordinador/coordinadorEdit', 'CoordinadorDocenteController@edit');
	Route::get('coordinador/coordinadorPerfil', 'CoordinadorDocenteController@perfil');
});



Route::group(['middleware' => ['auth:alumno,coordinador,profesor,admin']], function() {

	Route::get('/preenvio', 'correoController@index');
	Route::post('/envio', 'correoController@enviarEmail');	

});


