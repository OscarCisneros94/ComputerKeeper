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
        Schema::create('tecnico', function (Blueprint $table) {
            $table->integer('Cod_Tecnico', true);
            $table->string('Nombres', 30)->nullable();
            $table->string('Apellidos', 30)->nullable();
            $table->bigInteger('Num_CC')->nullable();
            $table->date('Fecha_Ingreso')->nullable();
            $table->string('Direccion', 30)->nullable();
            $table->bigInteger('Telefono')->nullable();
            $table->string('email', 40)->nullable();
            $table->date('Fecha_Nac')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tecnico');
    }
};
