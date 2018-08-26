<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary("id");
            $table->string('nome');
            $table->integer('ano_letivo');
            $table->integer('escola_id')->unsigned();
            $table->foreign('escola_id')->references('codigo')->on('schools');
            $table->integer('etapa');
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
        Schema::dropIfExists('classrooms');
    }
}
