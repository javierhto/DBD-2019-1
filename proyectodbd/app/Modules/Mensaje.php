<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //
    protected $table = 'mensaje';
 	protected $fillable =['asunto','contenido','remitente',
 							'destinatario','archivo',
 							'id_alumno','id_profesor'];

    public function alumno() {
    	return $this->belongsTo('App\Modules\Alumno');
    }

    public function profesor() {
    	return $this->belongsTo('App\Modules\Profesor');
    }
}
