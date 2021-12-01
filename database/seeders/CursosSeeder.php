<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'curso'=>'Agropecuária Mediterrânica',
            'nivel'=>'Nível 5'
        ]);
        DB::table('cursos')->insert([
            'curso'=>'Análises Laboratoriais',
            'nivel'=>'Nível 5'
        ]);
        DB::table('cursos')->insert([
            'curso'=>'Agronomia',
            'nivel'=>'Nível 6'
        ]);
        DB::table('cursos')->insert([
            'curso'=>'Ciência e Tecnologia dos Alimentos',
            'nivel'=>'Nível 6'
        ]);
        DB::table('cursos')->insert([
            'curso'=>'Contabilidade e Finanças',
            'nivel'=>'Nível 7'
        ]);
        DB::table('cursos')->insert([
            'curso'=>'Desenvolvimento Comunitário e Empreededorismo',
            'nivel'=>'Nível 7'
        ]);
        DB::table('cursos')->insert([
            'curso'=>'Cuidados Paleativos',
            'nivel'=>'Pós Graduação'
        ]);
        DB::table('cursos')->insert([
            'curso'=>'Sistemas de Informação Geográfica no Setor Florestal',
            'nivel'=>'Pós Graduação'
        ]);
    }
}
