<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class HistorialProfesor extends Model
{
    //
    protected $table = 'historial_profesor';
    protected $fillable =['semestre','id_profesor','id_asignatura','id_coordinacion'];

    //ESTA TIENE UNA TABLA DE MUCHOS A MUCHOS, ASI QUE NO SE COMO VA LA UNION
    //PARA DEBERIA HABER ALGUNA UNION CON UN PUBLIC
    //NO TENGO PRUEBAS PERO TAMPOCO TENGO DUDAS


    public function profesor() {
    	return $this->belongsTo('App\Modules\Profesor');
    }
    public function asignatura() {
    	return $this->belongsTo('App\Modules\Asignatura');
    }

}
