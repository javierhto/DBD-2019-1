<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table = 'horario';
    protected $fillable =['dia','bloque'];
    
    public function coordinacion() {
    	return $this->hasMany('App\Modules\CoordinacionHorario');
    }
}
