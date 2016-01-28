<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
	protected $table = 'clinicas';
	protected $fillable = ['nome','rua', 'bairro', 'telefone', 'numero'];
	
	public function medicos()
	{
		return $this->hasMany(Medico::class);
	}
}
