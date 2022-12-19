<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_generos', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->on('filmes')->references('id');

            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->on('generos')->references('id');

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
        Schema::dropIfExists('filme_generos');
    }
}
