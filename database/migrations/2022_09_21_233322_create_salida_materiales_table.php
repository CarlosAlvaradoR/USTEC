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
        Schema::create('salida_materiales', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');

            $table->unsignedBigInteger('salida_id');
            $table->foreign('salida_id')->references('id')->on('salidas');

            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materiales');

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
        Schema::dropIfExists('salida_materiales');
    }
};
