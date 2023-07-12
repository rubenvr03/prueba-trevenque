@extends('layouts.app')
@section('content')
    <section class="container register-form">
        <form method="POST" action="{{route('asignaturas.update', $asignatura->id)}}">
            @csrf
            @method("PUT")
        <div class="row mb-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="{{$asignatura->nombre}}" aria-label="Nombre"  name="nombre" value="{{old($asignatura->nombre)}}">
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="{{$asignatura->titulacion}}" aria-label="Titulacion" name="titulacion" value="{{old($asignatura->titulacion)}}">
              @error('titulacion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="numeric" class="form-control" placeholder="{{$asignatura->creditos}}" aria-label="Creditos" name="creditos" value="{{old($asignatura->creditos)}}">
                @error('creditos')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
                <input type="numeric" class="form-control" placeholder="{{$asignatura->curso_academico}}" aria-label="Curso Academico" name="curso_academico" value="{{old($asignatura->curso_academico)}}">
                  @error('curso_academico')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <input type="submit" value="Actualizar" class="btn btn-primary">
        </form>
    </section>

@endsection
