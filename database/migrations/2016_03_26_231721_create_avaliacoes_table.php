<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nota');
            $table->string('comentario');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('medico_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('avaliacoes', function($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('avaliacoes');
    }
}
