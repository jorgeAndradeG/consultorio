<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $especialidad=[
           ['nom_especialidad'=>'Medicina general','descripcion'=>'Es la especialidad medica que estudia la prevención, detección, tratamiento y seguimiento de las enfermedades crónicas estabilizadas'],
           ['nom_especialidad'=>'Pediatría','descripcion'=>'Es la especialidad médica que estudia al niño y sus enfermedades.'],
           ['nom_especialidad'=>'Cardiología','descripcion'=>'Es la especializan en el diagnóstico y tratamiento de las enfermedades del corazón y los vasos sanguíneos: el aparato cardiovascular.'],
           ['nom_especialidad'=>'Dermatologia','descripcion'=>'Es el especialista con el entrenamiento para valorar los problemas que se presentan en la piel, pelo y uñas'],
           ['nom_especialidad'=>'Oftalmologia','descripcion'=>'Sus funciones son el diagnostico, tratamiento y prevención de las enfermedades oculares, empleando para ello medicamentos, cristales graduados, intervenciones quirúrgicas, Láser.'],
           ['nom_especialidad'=>'Obstreticia','descripcion'=>'Los médicos obstetras se especializan tanto en el cuidado de las mujeres durante el embarazo como en el trabajo de parto, y el alumbramiento de sus bebés.']
       ];
       foreach($especialidad as $especialidades){
           Especialidad::create($especialidades);
       };
    }
}
