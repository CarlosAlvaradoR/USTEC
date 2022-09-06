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
        Schema::table('incidentes', function (Blueprint $table) {
            $table->string('descripcion');
            $table->integer('estado')->default(0);
            $table->foreignId('area_id')->constrained();
            //**es gravedad
            $table->foreignId('importancia_id')->constrained();
            $table->foreignId('tipo_id')->constrained();
            $table->foreignId('equipo_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incidentes', function (Blueprint $table) {
            $table->dropForeign('incidentes_area_id_foreign');
            $table->dropForeign('incidentes_equipo_id_foreign');
            $table->dropForeign('incidentes_importancia_id_foreign');
            $table->dropForeign('incidentes_tipo_id_foreign');
            $table->dropForeign('incidentes_user_id_foreign');
            $table->dropColumn(['descripcion', 'estado', 'area_id', 'importancia_id', 'tipo_id', 'equipo_id', 'user_id']);
        });
    }
};
