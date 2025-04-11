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
        Schema::table('servicio', function (Blueprint $table) {
            $table->foreign(['Cod_Equipo'], 'servicio_ibfk_1')->references(['Cod_Equipo'])->on('equipo');
            $table->foreign(['Cod_Tecnico'], 'servicio_ibfk_2')->references(['Cod_Tecnico'])->on('tecnico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicio', function (Blueprint $table) {
            $table->dropForeign('servicio_ibfk_1');
            $table->dropForeign('servicio_ibfk_2');
        });
    }
};
