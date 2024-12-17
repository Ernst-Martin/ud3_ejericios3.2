<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AsignaturasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('asignaturas')->insert([
            [
                'nombre' => 'Matemáticas',
                'descripcion' => 'Curso de matemáticas básicas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Lenguaje',
                'descripcion' => 'Curso de lengua y literatura',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Historia',
                'descripcion' => 'Curso de historia mundial',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}