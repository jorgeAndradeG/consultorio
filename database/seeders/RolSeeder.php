<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol=[ [
            'nombre'=>'adm'
        ],
        [
            'nombre'=>'medico'
        ],
        [
            'nombre'=>'paciente'
        ],
        [
            'nombre'=>'ejecutivo'
        ]];
        foreach ($rol as $roles) {
            Rol ::create($roles);
        }
    }
}
