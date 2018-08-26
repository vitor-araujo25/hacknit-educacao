<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aluno_id');
            $table->foreign('aluno_id')->references('cadastro_inep')->on('students');
            $table->float('nota');
            $table->integer('disciplina_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('subjects');

            //TODO: ver como funciona esquema de provas na rede municipal
            $table->integer('avaliacao'); //P1, P2, etc...
            $table->integer('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('classrooms');
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
        Schema::dropIfExists('scores');
    }
}
