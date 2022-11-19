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
        Schema::create('pagos', function (Blueprint $table) {
            $table->integer('ref_pago')->primary()->nullable(false);
            $table->double('valor', 10, 2)->nullable(false);
            $table->tinyInteger('pago')->default(0);
            $table->tinyInteger('activo')->default(0);
            $table->tinyInteger('cancelado')->default(0);
            $table->tinyInteger('reclamado')->default(0);
            $table->timestamp('created_at')->nullable(false)->useCurrent();
            $table->timestamp('update_at')->nullable(false)->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};
