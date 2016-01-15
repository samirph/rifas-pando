<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('acaos', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_usuario');
        $table->string('nome_acao',100);
        $table->longText('descricao');
        $table->longText('imagem');
        $table->integer('quantidade_rifas');
        $table->double('valor_rifa');
        $table->date('data_sorteio');
        $table->string('forma_entrega');
        $table->string('nome_contato');
        $table->string('email');
        $table->longText('foto_contato');
        $table->string('telefone_contato');
        $table->softDeletes();
        $table->longText('deleted_reason');
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
        Schema::drop('acaos');
    }
}
