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
        Schema::create('servicio', function (Blueprint $table) {
            $table->integer('Cod_Servicio', true);
            $table->date('Fecha')->nullable();
            $table->integer('Cod_Equipo')->nullable()->index('Cod_Equipo');
            $table->integer('Cod_Tecnico')->nullable()->index('Cod_Tecnico');
            $table->string('Estado', 30)->nullable();
            $table->string('Clasificacion', 30)->nullable();
            $table->string('Categoria', 50)->nullable();
            $table->string('Detalle_Servicio', 100)->nullable();
            $table->string('Observaciones', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
};
