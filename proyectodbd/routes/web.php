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
	//----Acciones hacia Alumnos
	Route::get('admin/adminDetallesAlumno/{id}', 'AlumnoController@show')->name('mostrarAlumno');
	Route::put('admin/adminModificaAlumno/{id}', 'AlumnoController@updateAlumno');
	Route::delete('admin/adminEliminaAlumno/{id}', 'AlumnoController@destroy');
	Route::get('admin/adminModificaAlumno/{id}', 'AlumnoController@EditAlumno')->name('modificarAlumno');
	Route::get('admin/adminEliminaAlumno/{id}', 'AlumnoController@MostrarAlumnos')->name('eliminarAlumno');
	Route::get('admin/adminAlumnos', 'AdministradorGeneralController@Alumnos')->name('AdminAlumnos');
	Route::post('admin/adminCreaAlumno', 'AlumnoController@store')->name('GuardaAlumno');
	Route::get('admin/adminCreaAlumno', 'AlumnoController@create')->name('AdminCreaAlumno');
	//----Acciones hacia Profesores
	Route::get('admin/adminDetallesProfesor/{id}', 'ProfesorController@show')->name('mostrarProfesor');
	Route::put('admin/adminModificaProfesor/{id}', 'ProfesorController@updateProfesor');
	Route::delete('admin/adminEliminaProfesor/{id}', 'ProfesorController@destroy');
	Route::get('admin/adminModificaProfesor/{id}', 'ProfesorController@EditProfesor')->name('modificarProfesor');
	Route::get('admin/adminEliminaProfesor/{id}', 'ProfesorController@MostrarProfesores')->name('eliminarProfesor');
	Route::get('admin/adminProfesores', 'AdministradorGeneralController@Profesores')->name('AdminProfesores');
	Route::post('admin/adminCreaProfesor', 'ProfesorController@store')->name('GuardaProfesor');
	Route::get('admin/adminCreaProfesor', 'ProfesorController@create')->name('AdminCreaProfesor');
	//----Acciones hacia Coordinadores
	Route::get('admin/adminDetallesCoordinador/{id}', 'CoordinadorDocenteController@show')->name('mostrarCoordinador');
	Route::put('admin/adminModificaCoordinador/{id}', 'CoordinadorDocenteController@updateCoordinador');
	Route::delete('admin/adminEliminaCoordinador/{id}', 'CoordinadorDocenteController@destroy');
	Route::get('admin/adminModificaCoordinador/{id}', 'CoordinadorDocenteController@EditCoordinador')->name('modificarCoordinador');
	Route::get('admin/adminEliminaCoordinador/{id}', 'CoordinadorDocenteController@MostrarCoordinadorres')->name('eliminarCoordinador');
	Route::get('admin/adminCoordinadores', 'AdministradorGeneralController@Coordinadores')->name('AdminCoordinadores');
	Route::post('admin/adminCreaCoordinador', 'CoordinadorDocenteController@store')->name('GuardaCoordinador');
	Route::get('admin/adminCreaCoordinador', 'CoordinadorDocenteController@create')->name('AdminCreaCoordinador');

	//----Acciones hacia Las Asignaturas
	Route::get('admin/adminDetallesAsignatura/{id}', 'AsignaturaController@showAsignatura')->name('mostrarAsignatura');
	Route::put('admin/adminModificaAsignatura/{id}', 'AsignaturaController@updateAsignatura');
	Route::delete('admin/adminEliminaAsignatura/{id}', 'AsignaturaController@destroy');
	Route::get('admin/adminModificaAsignatura/{id}', 'AsignaturaController@EditAsignatura')->name('modificarAsignatura');
	Route::get('admin/adminEliminaAsignatura/{id}', 'AsignaturaController@MostrarAsignatura')->name('eliminarAsignatura');
	Route::get('admin/adminAsignaturas', 'AdministradorGeneralController@Asignaturas')->name('AdminAsignaturas');
	Route::post('admin/adminCreaAsignatura', 'AsignaturaController@storeAdmin')->name('GuardaAsignatura');
	Route::get('admin/adminCreaAsignatura', 'AsignaturaController@createAdmin')->name('AdminCreaAsignatura');

	//----Acciones hacia Las Coordinaciones de una asignatura
	Route::get('admin/adminDetallesCoordinacion/{id}', 'CoordinacionController@showCoordinacion')->name('mostrarCoordinacion');
	Route::put('admin/adminModificaCoordinacion/{id}', 'CoordinacionController@updateCoordinacion');
	Route::delete('admin/adminEliminaCoordinacion/{id}', 'CoordinacionController@destroy');
	Route::get('admin/adminModificaCoordinacion/{id}', 'CoordinacionController@EditCoordinacion')->name('modificarCoordinacion');
	Route::get('admin/adminEliminaCoordinacion/{id}', 'CoordinacionController@MostrarCoordinacion')->name('eliminarCoordinacion');
	Route::get('admin/adminCoordinaciones/{id}', 'AdministradorGeneralController@Coordinaciones')->name('AdminCoordinacion');
	Route::post('admin/adminCreaCoordinacion/{id}', 'CoordinacionController@storeAdmin')->name('GuardaCoordinacion');
	Route::get('admin/adminCreaCoordinacion/{id}', 'CoordinacionController@createAdmin')->name('AdminCreaCoordinacion');

	//----Acciones hacia Administradores
	Route::get('admin/adminDetallesAdministrador/{id}', 'AdministradorGeneralController@show')->name('mostrarAdministrador');
	Route::put('admin/adminModificaAdministrador/{id}', 'AdministradorGeneralController@updateAdministrador');
	Route::delete('admin/adminEliminaAdministrador/{id}', 'AdministradorGeneralController@destroy');
	Route::get('admin/adminModificaAdministrador/{id}', 'AdministradorGeneralController@EditAdministrador')->name('modificarAdministrador');
	Route::get('admin/adminEliminaAdministrador/{id}', 'AdministradorGeneralController@MostrarAdministradores')->name('eliminarAdministrador');
	Route::get('admin/adminAdministradores', 'AdministradorGeneralController@Administradores')->name('AdminAdministradores');
	Route::post('admin/adminCreaAdministrador', 'AdministradorGeneralController@store')->name('GuardaAdministrador');
	Route::get('admin/adminCreaAdministrador', 'AdministradorGeneralController@create')->name('AdminCreaAdministrador');

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
	Route::post('profesor/profesorNuevaNota/{id_alumno}/{id_asignatura}','EvaluacionController@store');
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
	Route::put('coordinador/coordinadorEdit/{id}','CoordinadorDocenteController@update');
	Route::get('coordinador/coordinadorHome','CoordinadorDocenteController@secret');
	Route::get('coordinador/coordinadorEdit', 'CoordinadorDocenteController@edit');
	Route::get('coordinador/coordinadorPerfil', 'CoordinadorDocenteController@perfil');
});



Route::group(['middleware' => ['auth:alumno,coordinador,profesor,admin']], function() {

	Route::get('/preenvio', 'correoController@index');
	Route::post('/envio', 'correoController@enviarEmail');	

});


