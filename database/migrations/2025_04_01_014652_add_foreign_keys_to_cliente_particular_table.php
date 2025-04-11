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
        Schema::table('cliente_particular', function (Blueprint $table) {
            $table->foreign(['Cod_Cliente_Part'], 'cliente_particular_ibfk_1')->references(['Cod_Cliente'])->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente_particular', function (Blueprint $table) {
            $table->dropForeign('cliente_particular_ibfk_1');
        });
    }
};
