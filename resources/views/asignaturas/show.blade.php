@extends('layouts.app')

@section('content')
    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h1><strong>Nombre:</strong> {{$asignatura->nombre}}</h1>
                </div>
                <div class="col-md-6 mb-3">
                    <h2><strong> Titulación:</strong> {{$asignatura->titulacion}}</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <h2><strong>Creditos:</strong> {{$asignatura->creditos}}</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <h2><strong>Curso Académico:</strong> {{$asignatura->curso_academico}}</h2>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{route('asignaturas.index')}}" class="btn btn-success">Vovler al Inicio</a>
            </div>
        </div>
    </section>
@endsection
