<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFimeDiretoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fime_diretores', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->on('filmes')->references('id');

            $table->integer('diretor_id')->unsigned();
            $table->foreign('diretor_id')->on('diretores')->references('id');

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
        Schema::dropIfExists('fime_diretores');
    }
}
