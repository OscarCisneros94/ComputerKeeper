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
        Schema::create('cliente_particular', function (Blueprint $table) {
            $table->integer('Cod_Cliente_Part')->primary();
            $table->string('Nombres', 30)->nullable();
            $table->string('Apellidos', 30)->nullable();
            $table->string('Direccion', 30)->nullable();
            $table->bigInteger('Telefono')->nullable();
            $table->bigInteger('Num_CC')->nullable();
            $table->date('Fecha_Nac')->nullable();
            $table->string('Correo', 30)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_particular');
    }
};
