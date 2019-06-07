<?php

namespace App\Modules;

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
    	return $this->belongsTo('App\Modules\Comuna');
    }

    public function tarjetaCredito() {
    	return $this->hasMany('App\Modules\TarjetaCredito');
    }

    public function facturacion() {
    	return $this->hasMany('App\Modules\Facturacion');
    }

    public function historialAlumno() {
    	return $this->hasMany('App\Modules\HistorialAlumno');
    }

    public function mensaje() {
    	return $this->hasMany('App\Modules\Mensaje');
    }

    public function carrera() {
    	return $this->belongsToMany('App\Modules\Carrera', 'alumno_carrera');
    }
}
