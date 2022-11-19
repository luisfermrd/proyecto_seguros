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
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->integer('ref_pago')->primary()->nullable(false);
            $table->integer('id_user')->nullable(false);
            $table->integer('id_beneficiario')->nullable(false);
            $table->string('uso', 50)->nullable(false);
            $table->string('tipo_vehiculo', 40)->nullable(false);
            $table->string('marca', 40)->nullable(false);
            $table->string('otra_marca', 40)->nullable(true);
            $table->string('modelo', 20)->nullable(false);
            $table->string('version', 20)->nullable(true);
            $table->string('motor', 20)->nullable(true);
            $table->string('cv', 20)->nullable(true);
            $table->string('carga', 20)->nullable(true);
            $table->string('matricula', 20)->nullable(false);
            $table->date('fecha_carnet')->nullable(false);
            $table->timestamp('created_at',0)->useCurrent();
            $table->timestamp('update_at',0)->useCurrent()->useCurrentOnUpdate();
            $table->foreign('id_user')->references('id')->on('usuarios');
            $table->foreign('id_beneficiario')->references('id')->on('clientes');
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
        Schema::dropIfExists('vehiculo');
    }
};
