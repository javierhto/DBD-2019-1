<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetaCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjeta_credito', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // Cambiado de integer -> bigInteger
            $table->bigInteger('numero');
            $table->date('fecha_expiracion');
            $table->string('nombre_titular');
            $table->string('pais_facturacion');
            $table->string('ciudad_facturacion');
            $table->string('direccion_facturacion');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarjeta_credito');
    }
}
