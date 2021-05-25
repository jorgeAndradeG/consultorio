<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    public $timestamps = true;
	protected $table = 'especialidad';	
	protected $fillable = ['nom_especialidad','descripcion'];
}
