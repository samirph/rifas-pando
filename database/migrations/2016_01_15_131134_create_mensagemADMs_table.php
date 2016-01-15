<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagemADMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mensagemADMs', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_user');
        $table->string('titulo');
        $table->longText('descricao');
        $table->date('active_until');
        $table->boolean('is_active')->default(true);
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
        Schema::drop('mensagemADMs');
    }
}
