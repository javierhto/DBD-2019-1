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
	Route::get('admin/adminHome','AdministradorGeneralController@secret');
});


//Profesor
Route::get('profesor/profesorLogin','ProfesorController@showLoginForm');
Route::post('profesor/profesorLogin','ProfesorController@login');
//Rutas protegidas por guardian de profesor (solo posibles acceder a ellas logeado como profesor)
Route::group(['middleware' => ['auth:profesor']], function() {
	Route::get('profesor/profesorHome','ProfesorController@secret');
	Route::get('profesor/profesorHorario/{id}','ProfesorController@horario')->name('HorarioProfe');
	Route::get('profesor/profesorCursos/{id}','ProfesorController@cursos')->name('CursosProfe');
	Route::get('profesor/profesorAdminCurso/{id}','ProfesorController@admincurso')->name('AdminCursoProfe');
	Route::get('profesor/profesorNuevaNota/{id}','ProfesorController@agregaNota')->name('NuevaNotaProfe');
	Route::post('profesor/profesorNuevaNota/{id}','EvaluacionController@store');
	Route::get('profesor/profesorEdit', 'ProfesorController@edit');
	
});


//Alumno
Route::get('alumno/alumnoLogin','AlumnoController@showLoginForm');
Route::post('alumno/alumnoLogin','AlumnoController@login');
//Rutas protegidas por guardian de alumno (solo posibles acceder a ellas logeado como alumno)
Route::group(['middleware' => ['auth:alumno']], function() {
	Route::get('alumno/alumnoHome','AlumnoController@secret');
	Route::get('alumno/alumnoHorario/{id}','AlumnoController@horario')->name('Horario');
	Route::get('/alumno/alumnoEdit', 'AlumnoController@edit');
	Route::get('/alumno/alumnoPerfil', 'AlumnoController@perfil');
	//Route::patch('/alumno/alumnoEdit/{id}','AlumnoController@update')->parameters(['alumno' => 'id']);;

	Route::get('alumno/cuenta/{id}','AlumnoController@cuenta');			// vista - Cuenta personal
	Route::get('alumno/asignaturas','AlumnoController@asignaturas');	// vista - Asignaturas
	Route::get('alumno/horario','AlumnoController@horario');			// vista - Horario
	Route::get('alumno/pagos','AlumnoController@pagos');				// vista - Pagos
	Route::get('alumno/documentos','AlumnoController@documentos');		// vista - Documentos
});



//CoordinadorDocente
Route::get('coordinador/coordinadorLogin','CoordinadorDocenteController@showLoginForm');
Route::post('coordinador/coordinadorLogin','CoordinadorDocenteController@login');
//Rutas protegidas por guardian de Coordinador (solo posibles acceder a ellas logeado como Coordinador)
Route::group(['middleware' => ['auth:coordinador']], function() {
	Route::get('coordinador/coordinadorHome','CoordinadorDocenteController@secret');
});



Route::group(['middleware' => ['auth:alumno,coordinador,profesor,admin']], function() {

	Route::get('/preenvio', 'correoController@index');
	Route::post('/envio', 'correoController@enviarEmail');	

});


