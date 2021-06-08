<?php

namespace Database\Seeders;

use App\Models\Prevision;
use Illuminate\Database\Seeder;

class PrevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prevision = [
            ['nom_convenio'=>'Banmédica','descuento'=>'10'],
            ['nom_convenio'=>'Cruz Blanca','descuento'=>'20'],
            ['nom_convenio'=>'Colmena','descuento'=>'30'],
            ['nom_convenio'=>'MasVida','descuento'=>'40'],
            ['nom_convenio'=>'Consalud','descuento'=>'50'],
            ['nom_convenio'=>'Vida Tres','descuento'=>'60'],
            ['nom_convenio'=>'Fonasa','descuento'=>'100'],
            ['nom_convenio'=>'Paticular','descuento'=>'0']
        ];
        foreach( $prevision as  $previsiones){
            Prevision::create($previsiones);
        }
    }
}
