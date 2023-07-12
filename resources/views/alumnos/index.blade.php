@extends('layouts.app')

@section('content')
<section class="container">
<table class="table">
    <thead>
      <tr>
        <th><a href="{{route('alumnos.create')}}" class="btn btn-success">Crear Nuevo Alumno</a></th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Año de Nacimiento</th>
        <th scope="col">Calificaciones</th>
        <th scope="col">Curso Académico</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($alumnos as $alumno)

        <tr>
            <td><a href="{{route('alumnos.show', $alumno->id)}}">{{$alumno->name}}</a></td>
            <td>{{$alumno->surname}}</td>
            <td>{{$alumno->year_born}}</td>
            <td>{{$alumno->raitings}}</td>
            <td>{{$alumno->registration}}</td>
            <td><a href="{{route('alumnos.edit', $alumno->id)}}" class="btn btn-warning">Editar Alumno</a></td>
            <td>
                <form method="POST" action="{{route('alumnos.destroy', $alumno->id)}}" >
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar Alumno" class="btn btn-danger">
                </form>
            </td>
            <th><a href="{{route('matriculas.create')}}?alumno_id={{$alumno->id}}" class="btn btn-success">Matricular Alumno</a></th>
          </tr>

        @empty
       <h2>No se encuentran datos</h2>
        @endforelse
    </tbody>
  </table>
</section>
@endsection
