<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regimes')->insert([
            'regime'=>'Diurno',
            'sigla'=>'DIU',
            'descricao'=>'Ensino durante o dia.'
        ]);
        DB::table('regimes')->insert([
            'regime'=>'Laboral',
            'sigla'=>'LAB',
            'descricao'=>'Ensino durante o periodo laboral.'
        ]);
        DB::table('regimes')->insert([
            'regime'=>'Pós Laboral',
            'sigla'=>'POS-LAB',
            'descricao'=>'Ensino durante o periodo pós-laboral.'
        ]);
        DB::table('regimes')->insert([
            'regime'=>'Ensino á Distância',
            'sigla'=>'E-DIS',
            'descricao'=>'Ensino remoto.'
        ]);
        DB::table('regimes')->insert([
            'regime'=>'Blended Learning',
            'sigla'=>'B-LERN',
            'descricao'=>'Ensino misto remoto e presencial.'
        ]);
    }
}
