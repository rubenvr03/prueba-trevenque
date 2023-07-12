<?php

namespace App\Http\Controllers;

use App\Models\Asignaturas;
use App\Http\Requests\StoreAsignaturasRequest;
use App\Http\Requests\UpdateAsignaturasRequest;

class AsignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignaturas = Asignaturas::all();
        return view('asignaturas.index', compact('asignaturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asignaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAsignaturasRequest $request)
    {
        $data = $request->validated();
        Asignaturas::create($data);

        return redirect('asignaturas')->with('alert', [
            'message' => "La asignatura ha sido creada"
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(Asignaturas $asignaturas, $id)
    {
        $asignatura = $asignaturas::find($id);

        return view('asignaturas.show', compact('asignatura'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignaturas $asignaturas, $id)
    {
        $asignatura = $asignaturas::find($id);
        return view('asignaturas.edit', compact('asignatura') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAsignaturasRequest $request, Asignaturas $asignaturas, $id)
    {
        $asignatura = $asignaturas::find($id);
        $data = $request->validated();
        $update = $asignatura->update($data);
        if($update == true){
             return redirect()->route('asignaturas.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignaturas $asignaturas, $id)
    {
        $asignatura = $asignaturas::find($id);
        $delete = $asignatura->delete();
        if ($delete == true) {
            return redirect('/asignaturas');
        }
    }
}
