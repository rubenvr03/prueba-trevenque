<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model
{
    use HasFactory;
    protected $fillable = [
        'alumnos_id',
        'asignaturas_id',
    ];
}
