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
        Schema::create('equipo', function (Blueprint $table) {
            $table->integer('Cod_Equipo', true);
            $table->integer('Cod_Cliente')->nullable()->index('Cod_Cliente');
            $table->string('Nombre_Equipo', 30)->nullable();
            $table->string('Marca', 30)->nullable();
            $table->string('Modelo', 30)->nullable();
            $table->string('Serial', 30)->nullable();
            $table->string('Nombre_SO', 40)->nullable();
            $table->string('Procesador', 40)->nullable();
            $table->string('Memoria_RAM', 20)->nullable();
            $table->string('Tipo_Sistema', 30)->nullable();
            $table->string('Tipo_Equipo', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo');
    }
};
