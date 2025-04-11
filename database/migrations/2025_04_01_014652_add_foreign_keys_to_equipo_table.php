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
        Schema::table('equipo', function (Blueprint $table) {
            $table->foreign(['Cod_Cliente'], 'equipo_ibfk_1')->references(['Cod_Cliente'])->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipo', function (Blueprint $table) {
            $table->dropForeign('equipo_ibfk_1');
        });
    }
};
