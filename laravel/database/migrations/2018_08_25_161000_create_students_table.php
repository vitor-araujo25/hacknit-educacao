<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('cadastro_inep');
            $table->primary('cadastro_inep');
            $table->string('nome');
            $table->integer('turma_atual')->unsigned();
            $table->foreign('turma_atual')->references('id')->on('classrooms');
            $table->integer('idade');
            $table->integer('ano_nascimento');
            $table->string('sexo');
            $table->string('etnia');
            $table->string('zona_residencial');
            $table->integer('pai')->unsigned();
            $table->foreign('pai')->references('id')->on('users');
            $table->integer('anos_atraso');
            $table->float('prob_evasao');
            $table->float('prob_rep');
            $table->float('prob_promo');
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
        Schema::dropIfExists('students');
    }
}
