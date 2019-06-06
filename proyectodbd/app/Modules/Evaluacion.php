<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    //
    protected $table = 'evaluacion';
    protected $fillable =['nombre','tipo','ponderacion','id_asignatura'];

    public function asignatura() {
    	return $this->belongsTo('App\Modules\Asignatura');
    }
}
