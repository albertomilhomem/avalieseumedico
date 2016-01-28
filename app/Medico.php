<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
	protected $table = 'medicos';
	protected $fillable = ['nome', 'telefone', 'clinica_id', 'especialidade_id'];

	public function especialidade()
	{
		return $this->belongsTo(Especialidade::class);
	}

	public function clinica()
	{
		return $this->belongsTo(Clinica::class);
	}

	public function avaliacoes()
	{
		return $this->hasMany(Avaliacao::class);
	}

}
