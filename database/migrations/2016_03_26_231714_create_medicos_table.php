<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('nota')->nullable();
            $table->boolean('avatar')->nullable();
            $table->string('avatar_local')->nullable();
            $table->integer('clinica_id')->unsigned()->nullable();
            $table->integer('especialidade_id')->unsigned()->nullable();
            $table->timestamps();
        });


        Schema::table('medicos', function($table){            
            $table->foreign('clinica_id')->references('id')->on('clinicas')->onDelete('cascade');
            $table->foreign('especialidade_id')->references('id')->on('especialidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicos');
    }
}
