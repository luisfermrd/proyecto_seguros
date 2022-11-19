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
        Schema::create('vivienda', function (Blueprint $table) {
            $table->integer('ref_pago')->primary()->nullable(false);
            $table->integer('id_user')->nullable(false);
            $table->integer('id_beneficiario')->nullable(false);
            $table->string('direccion', 100)->nullable(false);
            $table->string('ciudad', 80)->nullable(false);
            $table->string('aseguradora', 80)->nullable(true);
            $table->string('edad_construccion', 3)->nullable(false);
            $table->double('valor_inmueble', 10, 2)->nullable(false);
            $table->string('contenido', 2)->nullable(true);
            $table->string('acreedor', 2)->nullable(true);
            $table->date('fecha_inicio')->nullable(false);
            $table->date('fecha_fin')->nullable(false);
            $table->string('tipo', 50)->nullable(false);
            $table->string('plan', 20)->nullable(false);
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
        Schema::dropIfExists('vivienda');
    }
};
