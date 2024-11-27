<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('clientes')->insert([
            [
                'nombre' =>'Juan',
                'apellido' =>'Perex',
                'email' =>'Juan@gmail.com',
                'telefono' =>'+123456789',
            ],[
                'nombre' =>'Joan',
                'apellido' =>'Higuera',
                'email' =>'Juan@gmail.com',
                'telefono' =>'+123654789',
            ],[
                'nombre' =>'Carlos',
                'apellido' =>'Muñoz',
                'email' =>'Juan@gmail.com',
                'telefono' =>'+432156789',
            ]]);
    }
}
