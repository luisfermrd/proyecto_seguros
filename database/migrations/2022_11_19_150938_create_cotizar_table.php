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
        Schema::create('cotizar', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->nullable(false);
            $table->string('tipo', 20)->nullable(false);
            $table->decimal('basico', 10, 2)->nullable(false);
            $table->decimal('estandar', 10, 2)->nullable(false);
            $table->decimal('premiun', 10, 2)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizar');
    }
};
