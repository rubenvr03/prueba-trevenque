<?php

namespace App\Http\Controllers;

use App\Models\Matriculas;
use App\Http\Requests\StoreMatriculasRequest;
use App\Http\Requests\UpdateMatriculasRequest;

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
    public function create(StoreMatriculasRequest $request)
    {
        return view('matriculas.create');
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
    public function update(UpdateMatriculasRequest $request, Matriculas $matriculas)
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
