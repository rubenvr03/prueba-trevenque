<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignaturas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'titulacion',
        'creditos',
        'alumnos_max',
        'curso_academico',
    ];

    public function matriculas()
    {
        return $this->hasMany(Matriculas::class, 'asignatura_id');
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumnos::class, 'matriculas', 'asignatura_id', 'alumno_id');
    }

}
