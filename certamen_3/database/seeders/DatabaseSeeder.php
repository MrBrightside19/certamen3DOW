<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre'=>'Gabriel',
            'apellido'=>'Fuentes',
            'password'=>Hash::make('1234'),
            'email'=>'gabriel@gmail.com',
            'rol'=>'0'
        ]);

        DB::table('usuarios')->insert([
            'nombre'=>'Mario',
            'apellido'=>'Mejias',
            'password'=>Hash::make('5678'),
            'email'=>'mario@gmail.com',
            'rol'=>'1'
        ]);
    }
}
