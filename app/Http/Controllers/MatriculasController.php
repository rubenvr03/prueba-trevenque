<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMatriculasRequest;
use App\Http\Requests\UpdateMatriculasRequest;
use App\Models\Alumnos;
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
        return view('matriculas.create', compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatriculasRequest $request)
    {
        //
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
