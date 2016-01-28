<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
	protected $table = 'avaliacoes';

	protected $fillable = ['id', 'medico_id', 'user_id', 'nota', 'comentario'];


    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function medico()
    {
    	return $this->belongsTo(Medico::class);
    }
}
