<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class CoordinacionProfesor extends Model
{
    protected $table = 'coordinacion_profesor';
    protected $fillable =['id_coordinacion',
                            'id_profesor'];


    public function coordinacion() {
    	return $this->belongsToMany('App\Modules\Coordinacion');
    }
    public function profesor() {
    	return $this->belongsToMany('App\Modules\Profesor');
    }
}
