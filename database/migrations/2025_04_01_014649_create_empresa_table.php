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
        Schema::create('empresa', function (Blueprint $table) {
            $table->integer('Cod_Empresa', true);
            $table->string('Nombre', 30)->nullable();
            $table->bigInteger('Num_NIT')->nullable();
            $table->string('Direccion', 30)->nullable();
            $table->bigInteger('Telefono')->nullable();
            $table->date('Fecha_Contrato')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
};
