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
            $table->increments('id');
            $table->string('nome');
            $table->integer('turma_atual')->unsigned();
            $table->foreign('turma_atual')->references('id')->on('classrooms');
            $table->integer('idade');
            $table->date('data_de_ingresso');
            $table->date('data_nascimento');
            $table->string('sexo');
            $table->integer('etnia');
            $table->integer('zona_residencial');
            $table->integer('pai')->unsigned();
            $table->foreign('pai')->references('id')->on('users');
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
