@extends('layouts.app')
@section('content')

    <section class="container register-form">
        <form action="{{route('asignaturas.store')}}" name="create_asignatura" method="POST">
            @csrf
        <div class="row mb-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"  name="nombre">
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Titulacion" aria-label="Titulacion" name="titulacion">
              @error('titulacion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="numeric" class="form-control" placeholder="Creditos" aria-label="Creditos" name="creditos">
                @error('creditos')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
                <input type="numeric" class="form-control" placeholder="Curso Académico" aria-label="Curso Académico" name="curso_academico">
                  @error('curso_academico')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="col">
                <input type="numeric" class="form-control" placeholder="Alumnos maximos" aria-label="Alumnos maximos" name="alumnos_max">
                  @error('alumnos_max')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </section>

@endsection
