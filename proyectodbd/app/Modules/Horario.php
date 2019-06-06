<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table = 'horario';
    protected $fillable =['dia','bloque'];
    
    public function coordinacion() {
    	return $this->belongsToMany('App\Modules\Coordinacion', 'coordinacion_horario');
    }
}
