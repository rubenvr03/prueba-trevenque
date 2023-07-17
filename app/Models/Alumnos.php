<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'year_born',
    ];

    public function asignaturas()
    {
        return $this->belongsToMany(Asignaturas::class, 'matriculas', 'alumno_id', 'asignatura_id');
    }
}
