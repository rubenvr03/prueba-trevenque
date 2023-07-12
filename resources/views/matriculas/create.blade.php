@extends('layouts.app')
@section('content')
    <section class="container register-form">
        <form action="{{route('matriculas.store')}}" name="create_matricula" method="POST">
            @csrf
        <div class="row mb-3">
            <div class="col">
              <input type="numeric" value="{{$alumno->id}}" class="form-control" name="alumno_id">
                @error('alumno_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" name="matriculas_id">
              @error('matriculas_id')
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
