<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerAtualizarNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER atualizar_nota_insert AFTER INSERT ON avaliacoes FOR EACH ROW UPDATE medicos SET nota = ( SELECT AVG( avaliacoes.nota ) FROM avaliacoes WHERE medico_id = new.medico_id ) WHERE id = new.medico_id');

        DB::unprepared('CREATE TRIGGER atualizar_nota_delete AFTER DELETE ON avaliacoes FOR EACH ROW UPDATE medicos SET nota = ( SELECT AVG( avaliacoes.nota ) FROM avaliacoes WHERE medico_id = old.medico_id ) WHERE id = old.medico_id');

        DB::unprepared('CREATE TRIGGER atualizar_nota_update AFTER UPDATE ON avaliacoes FOR EACH ROW UPDATE medicos SET nota = ( SELECT AVG( avaliacoes.nota ) FROM avaliacoes WHERE medico_id = new.medico_id ) WHERE id = new.medico_id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        /**
        DB::unprepared('DROP TRIGGER atualizar_nota_insert');
        DB::unprepared('DROP TRIGGER atualizar_nota_delete');
        DB::unprepared('DROP TRIGGER atualizar_nota_update');
        */
    }
}
