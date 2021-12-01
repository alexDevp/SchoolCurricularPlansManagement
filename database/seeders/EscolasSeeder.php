<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolasSeeder extends Seeder
{
    public function run()
    {
        DB::table('escolas')->insert([
            'escola'=>'Escola Superior Agrária',
            'morada'=>'Rua Pedro Soares, 7800-295 Beja'
        ]);
        DB::table('escolas')->insert([
            'escola'=>'Escola Superior de Educação',
            'morada'=>'Rua Pedro Soares, 7800-295 Beja'
        ]);
        DB::table('escolas')->insert([
            'escola'=>'Escola Superior de Saúde',
            'morada'=>'Rua Dr. José Correia Maltez, 7800-111 Beja'
        ]);
        DB::table('escolas')->insert([
            'escola'=>'Escola Superior de Tecnologia e Gestão',
            'morada'=>'Rua Pedro Soares, 7800-295 Beja'
        ]);
    }
}
