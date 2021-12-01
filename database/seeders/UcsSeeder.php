<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UcsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ucs')->insert([
            'codigo'=>'222702',
            'nome'=>'Economia',
            'creditos'=>'5',
            'duracao'=>'125',
            'teorica'=>'60',
            'pratica'=>'0',
            'ano'=>'1',
            'semestre'=>'1'

        ]);
        DB::table('ucs')->insert([
            'codigo'=>'9010103',
            'nome'=>'Áudio',
            'creditos'=>'4',
            'duracao'=>'100',
            'teorica'=>'30',
            'pratica'=>'15',
            'ano'=>'1',
            'semestre'=>'1'

        ]);
        DB::table('ucs')->insert([
            'codigo'=>'9010117',
            'nome'=>'Museografia',
            'creditos'=>'5',
            'duracao'=>'125',
            'teorica'=>'60',
            'pratica'=>'45',
            'ano'=>'2',
            'semestre'=>'1'

        ]);
        DB::table('ucs')->insert([
            'codigo'=>'956334',
            'nome'=>'Anàlise do Movimento',
            'creditos'=>'4',
            'duracao'=>'100',
            'teorica'=>'30',
            'pratica'=>'25',
            'ano'=>'2',
            'semestre'=>'2'

        ]);
        DB::table('ucs')->insert([
            'codigo'=>'909923',
            'nome'=>'Hidrogeologia',
            'creditos'=>'4',
            'duracao'=>'100',
            'teorica'=>'30',
            'pratica'=>'25',
            'ano'=>'2',
            'semestre'=>'2'

        ]);
        DB::table('ucs')->insert([
            'codigo'=>'909932',
            'nome'=>'Valorização de resíduos',
            'creditos'=>'5',
            'duracao'=>'125',
            'teorica'=>'30',
            'pratica'=>'25',
            'ano'=>'3',
            'semestre'=>'1'

        ]);
    }
}
