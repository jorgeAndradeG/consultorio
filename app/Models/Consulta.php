<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    public $timestamps = true;
	protected $table = 'consulta';	
	protected $fillable = ['patologia','hora','box','valor','asistencia','id_u','id_u_r'];
}
