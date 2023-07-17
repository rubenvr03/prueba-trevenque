<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Http\Requests\StoreAlumnosRequest;
use App\Http\Requests\UpdateAlumnosRequest;
use App\Models\Asignaturas;
use App\Models\Matriculas;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\HttpException;

use function PHPUnit\Framework\returnCallback;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumnos::all();
        if (auth()) {
            return view('alumnos.index', compact('alumnos'));
        }else{
            return view('home');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asignaturas = Asignaturas::all();
        return view('alumnos.create', compact('asignaturas'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnosRequest $request)
    {
        $data = $request->validated();
        $alumno = Alumnos::create($data);

         return redirect('alumnos')->with('alert', [
             'message' => "El Alumno ha sido creado"
         ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnos $alumnos, $id)
    {
        $alumno = $alumnos::findOrFail($id);
        $fecha = $alumno->year_born;
        $fecha = Carbon::parse($fecha)->locale('es');
        $fechaCarbon = $fecha->isoFormat('LL');
        $alumno['date_born'] = $fechaCarbon;
        $asignaturas = $alumno->asignaturas;


        return view('alumnos.show', compact('alumno', 'asignaturas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumno = Alumnos::find($id);
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAlumnosRequest $request, $id)
    {
        $alumno = Alumnos::find($id);
        $data = $request->validated();
        $update = $alumno->update($data);
        if($update == true){
             return redirect()->route('alumnos.index');
        }else{
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumnos $alumnos, $id)
    {
        $alumno = $alumnos::find($id);
        $delete = $alumno->delete();
        if ($delete == true) {
            return redirect('/alumnos');
        }
    }
}
