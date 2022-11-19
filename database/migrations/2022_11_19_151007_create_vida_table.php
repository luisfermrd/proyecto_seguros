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
        Schema::create('vida', function (Blueprint $table) {
            $table->integer('ref_pago')->nullable(false);
            $table->integer('id_user')->unique()->nullable(false);
            $table->integer('id_beneficiario')->unique()->nullable(false);
            $table->timestamp('fecha_nacimineto')->nullable(false);
            $table->string('sexo', 20)->nullable(false);
            $table->string('estado_civil', 20)->nullable(false);
            $table->string('celular', 20)->nullable(false);
            $table->string('direccion', 150)->nullable(false);
            $table->string('ciudad', 100)->nullable(false);
            $table->integer('ingresos')->nullable(false);
            $table->string('profesion', 100)->nullable(false);
            $table->string('medicamento', 20)->nullable(false);
            $table->string('cual', 100)->nullable(false);
            $table->string('eps_ips', 100)->nullable(false);
            $table->date('fecha_inicio')->nullable(false);
            $table->date('fecha_fin')->nullable(false);
            $table->string('tipo', 50)->nullable(false);
            $table->string('plan', 20)->nullable(false);
            $table->timestamp('created_at')->nullable(false);
            $table->timestamp('update_at')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vida');
    }
};
