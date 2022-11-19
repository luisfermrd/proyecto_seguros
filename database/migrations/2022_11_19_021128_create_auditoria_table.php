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
        Schema::create('auditoria', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->integer('id_usuario')->nullable(false);
            $table->ipAddress('ip')->nullable(false);
            $table->timestamp('fecha_hora', $precision = 0);
            $table->string('descripcion', 255)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditoria');
    }
};
