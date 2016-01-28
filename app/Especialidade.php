<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
	protected $table = 'especialidades';
	protected $fillable = ['nome', 'descricao'];

	public function medicos()
	{
		return $this->hasMany(Medico::class)->orderBy('nota', 'desc');
	}
}
