@extends('layouts.app')

@section('content')
    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h1><strong>Nombre y Apellidos:</strong> {{$alumno->name}} - {{$alumno->surname}}</h1>
                </div>
                <div class="col-md-6 mb-3">
                    <h2><strong> Fecha de Nacimiento:</strong> {{$alumno->date_born}}</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <h2><strong>Calificaciones:</strong> {{$alumno->raitings}}</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <h2><strong>Matrícula:</strong> {{$alumno->registration}}</h2>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{route('alumnos.index')}}" class="btn btn-success">Vovler al Inicio</a>
            </div>
        </div>
    </section>
@endsection
