<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RolSeeder::class,EspecialidadSeeder::class,PreguntaSeeder::class,PrevisionSeeder::class]);
    }
}
