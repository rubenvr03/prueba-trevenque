<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMatriculasRequest;
use App\Http\Requests\UpdateMatriculasRequest;
use App\Models\Alumnos;
use App\Models\Asignaturas;
use App\Models\Matriculas;
use Illuminate\Http\Request;

class MatriculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $alumno = Alumnos::find($request->alumno_id);
        $asignaturas = Asignaturas::all();
        return view('matriculas.create', compact('alumno', 'asignaturas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatriculasRequest $request)
    {
        $data = $request->all();
        $id_alumno = intval($data['alumno_id']);
        $id_asignatura = intval($data['asignatura_id']);
        $asignatura = Asignaturas::find($id_asignatura);
        $num_max_asignatura = $asignatura->alumnos_max;
        $matriculasCount = $asignatura->matriculas->count();

        if ($matriculasCount >= $num_max_asignatura) {
            return redirect()->back()->withInput()->withErrors(['max_alumn' => 'Se alcanzó el número máximo de alumnos para esta asignatura.']);
        }

        $matricula = Matriculas::create([
            'alumno_id' => $id_alumno,
            'asignatura_id' => $id_asignatura
        ]);

        return redirect()->route('alumnos.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Matriculas $matriculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matriculas $matriculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMatriculasRequest $request, Matriculas $matriculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matriculas $matriculas)
    {
        //
    }
}
