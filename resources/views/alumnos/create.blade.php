@extends('layouts.app')
@section('content')
    <section class="container register-form">
        <form action="{{route('alumnos.store')}}" name="create_alumno" method="POST">
            @csrf
        <div class="row mb-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"  name="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" name="surname">
              @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="date" class="form-control" placeholder="Año de Nacimiento" aria-label="Año de Nacimiento" name="year_born">
                @error('year_born')
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
