@extends('layouts.app')
@section('content')
    <section class="container register-form">
        <form method="POST" action="{{route('alumnos.update', $alumno->id)}}">
            @csrf
            @method("PUT")
        <div class="row mb-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="{{$alumno->name}}" aria-label="Nombre"  name="name" value="{{old($alumno->name)}}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="{{$alumno->surname}}" aria-label="Apellido" name="surname" value="{{old($alumno->surname)}}">
              @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="date" class="form-control" placeholder="{{$alumno->year_born}}" aria-label="Año de Nacimiento" name="year_born" value="{{old($alumno->year_born)}}">
                @error('year_born')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
                <input type="numeric" class="form-control" placeholder="{{$alumno->raitings}}" aria-label="Calificaciones" name="raitings" value="{{old($alumno->raitings)}}">
                  @error('raitings')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="{{$alumno->registration}}" aria-label="registration" name="registration" value="{{old($alumno->registration)}}">
                @error('registration')
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
