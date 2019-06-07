<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Alumno extends Model
{
    //
    protected $table = 'alumno';
    protected $fillable =['numero_matricula','fecha_nacimiento','nombre','correo',
                        'direccion','telefono','celular','contrasena','jornada',
                            'situacion','ano_ingreso','ultima_matricula','nivel_actual',
                            'avance','eficiencia','asignaturas_aprobadas','PPA',
                            'id_comuna','id_carrera'
                            ];
 
    public function comuna() {
    	return $this->belongsTo('App\Comuna');
    }

    public function tarjetaCredito() {
    	return $this->hasMany('App\TarjetaCredito');
    }

    public function facturacion() {
    	return $this->hasMany('App\Facturacion');
    }

    public function historialAlumno() {
    	return $this->hasMany('App\HistorialAlumno');
    }

    public function mensaje() {
    	return $this->hasMany('App\Mensaje');
    }

    public function alumnoYCarrera() {
    	return $this->hasMany('App\AlumnoYCarrera');
    }
}
