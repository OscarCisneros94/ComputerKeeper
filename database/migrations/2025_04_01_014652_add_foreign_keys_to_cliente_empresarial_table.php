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
        Schema::table('cliente_empresarial', function (Blueprint $table) {
            $table->foreign(['Cod_Empresa'], 'cliente_empresarial_ibfk_1')->references(['Cod_Empresa'])->on('empresa');
            $table->foreign(['Cod_Cliente_Emp'], 'cliente_empresarial_ibfk_2')->references(['Cod_Cliente'])->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente_empresarial', function (Blueprint $table) {
            $table->dropForeign('cliente_empresarial_ibfk_1');
            $table->dropForeign('cliente_empresarial_ibfk_2');
        });
    }
};
