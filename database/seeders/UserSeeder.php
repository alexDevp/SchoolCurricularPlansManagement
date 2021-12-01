<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'admin'=>1,
            'nome'=>'Administrador',
            'email'=>'admin@ipbeja.pt',
            'password'=>Hash::make('admin')
        ]);

        DB::table('users')->insert([
            'admin'=>0,
            'nome'=>'Professor',
            'email'=>'prof@ipbeja.pt',
            'password'=>Hash::make('prof')
        ]);
    }
}
