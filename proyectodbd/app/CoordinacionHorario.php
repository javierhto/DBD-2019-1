<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoordinacionHorario extends Model
{
    protected $table = 'coordinacion_horario';
    protected $fillable =['sala','id_coordinacion',
                            'id_horario'];


    public function coordinacion() {
    	return $this->belongsTo('App\Coordinacion');
    }
    public function horario() {
    	return $this->belongsTo('App\Horario');
    }
}
