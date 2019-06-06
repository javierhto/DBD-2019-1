<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarjetaCredito extends Model
{
    //
    protected $table = 'tarjeta_credito';
    protected $fillable =['numero','nombre_titular','fecha_expiracion','pais_facturacion',
							'ciudad_facturacion','direccion_facturacion','id_alumno'
							];

    public function alumno() {
    	return $this->belongsTo('App\Modules\Alumno');
    }
}
