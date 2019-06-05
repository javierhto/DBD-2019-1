<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoordinacionProfesor extends Model
{
    protected $table = 'coordinacion_profesor';
    protected $fillable =['id_coordinacion',
                            'id_profesor'];


    public function coordinacion() {
    	return $this->belongsTo('App\Coordinacion');
    }
    public function profesor() {
    	return $this->belongsTo('App\Profesor');
    }
}
