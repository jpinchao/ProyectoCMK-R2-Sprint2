<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
           //$table->unsignedBigInteger('servicio_publicado_id');
            //$table->foreign('servicio_publicado_id')->references('id')->on('publicar_servicios');
            //$table->unsignedBigInteger('pago_id');
            //$table->foreign('pago_id')->references('id')->on('pagos');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_compras_servicios');
    }
};
