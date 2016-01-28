<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(EspecialidadeTableSeeder::class);
        $this->call(MedicoTableSeeder::class);
        $this->call(ClinicaTableSeeder::class);

        Model::reguard();
    }
}

class EspecialidadeTableSeeder extends Seeder {
    public function run()
    {
            DB::table('especialidades')->insert([
            'nome' => str_random(10),
            'descricao' => str_random(10)
        ]);
    }
}

class MedicoTableSeeder extends Seeder {
    public function run()
    {
            DB::table('medicos')->insert([
            'nome' => str_random(10)
        ]);
    }
}

class ClinicaTableSeeder extends Seeder {
    public function run()
    {
            DB::table('clinicas')->insert([
            'nome' => str_random(10),
            'telefone' => str_random(10),
            'rua' => str_random(20),
            'numero' => str_random(4),
            'bairro' => str_random(10)
        ]);
    }
}
