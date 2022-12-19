<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->string('titulo');
            $table->date('lancamento_at');
            $table->integer('duracao');

            $table->integer('classificacao_id')->unsigned();
            $table->foreign('classificacao_id')->on('classificacoes')->references('id');

            $table->text('sinopse');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmes');
    }
}
