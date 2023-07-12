@extends('layouts.app')

@section('content')
<section class="container">
    <a href="{{route('asignaturas.create')}}" class="btn btn-success mb-4">Crear Nueva Asignatura</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Titulacion</th>
        <th scope="col">Creditos</th>
        <th scope="col">Curso Académico</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @forelse ($asignaturas as $asignatura)
        <tr>
            <td><a href="{{route('asignaturas.show', $asignatura->id)}}">{{$asignatura->nombre}}</a></td>
            <td>{{$asignatura->titulacion}}</td>
            <td>{{$asignatura->creditos}}</td>
            <td>{{$asignatura->curso_academico}}</td>
            <td><a href="{{route('asignaturas.edit', $asignatura->id)}}" class="btn btn-warning">Editar asignatura</a></td>
            <td>
                <form method="POST" action="{{route('asignaturas.destroy', $asignatura->id)}}" >
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar asignatura" class="btn btn-danger">
                </form>
            </td>
          </tr>

        @empty
       <h2>No se encuentran datos</h2>
        @endforelse
    </tbody>
  </table>
</section>
@endsection
