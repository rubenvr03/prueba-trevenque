<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumno_id',
        'asignatura_id',
    ];

    public function asignatura()
    {
        return $this->belongsTo(Asignaturas::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumnos::class, 'matriculas', 'asignatura_id', 'alumno_id');
    }


}
