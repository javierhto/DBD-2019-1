<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministradorGeneral extends Model
{
    //
    protected $table = 'administrador_general';

    public function comuna() {
    	return $this->belongsTo('App\Comuna');
    }
}