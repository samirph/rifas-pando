<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rifas', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_acao');
        $table->string('nome_rifa');
        $table->integer('id_comprador')->nullable();
        $table->date('soldAt');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rifas');
    }
}
