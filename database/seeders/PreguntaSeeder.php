<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preguntas=[['pregunta'=>'No pudo agendar Consulta'],
        ['pregunta'=>'No pudo cancelar su consulta'],
        ['pregunta'=>'No exite la especialidad'],
        ['pregunta'=>'Necesita que nos contactemos con usted'],
        ['pregunta'=>'Preguntar por horas'],
        ['pregunta'=>'Otra pregunta']];
        foreach($preguntas as $pregunta){
            
            Pregunta::create($pregunta);
        };
    }
}
