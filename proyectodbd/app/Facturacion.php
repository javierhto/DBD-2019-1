<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    //
    protected $table = 'facturacion';
	protected $fillable =['estado','monto','fecha','fecha_expiracion','id_alumno'];

    public function alumno() {
    	return $this->belongsTo('App\Alumno');
    }
}
