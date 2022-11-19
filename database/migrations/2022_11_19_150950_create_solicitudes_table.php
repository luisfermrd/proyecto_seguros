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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id_solicitud')->nullable(false);
            $table->timestamp('fecha_solicitud', $precision = 0)->useCurrent();
            $table->tinyInteger('estado')->nullable(false);
            $table->integer('ref_pago');
            $table->timestamp('update_at', $precision = 0)->useCurrent()->useCurrentOnUpdate();
            $table->foreign('ref_pago')->references('ref_pago')->on('pagos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
};
