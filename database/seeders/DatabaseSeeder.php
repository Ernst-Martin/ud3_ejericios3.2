<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AlumnosTableSeeder::class);
        $this->call(AsignaturasTableSeeder::class);
        $this->call(NotasTableSeeder::class);
    }
}