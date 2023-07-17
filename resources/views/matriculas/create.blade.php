@extends('layouts.app')
@section('content')

@if($errors->has('max_alumn'))
    <div class="alert alert-danger">
        {{ $errors->first('max_alumn') }}
    </div>
@endif
    <section class="container register-form">
        <form action="{{route('matriculas.store')}}" name="create_matricula" method="POST">
            @csrf
        <div class="row mb-3">
            <div class="col">
                <select name="alumno_id" id="">
                    <option selected value="{{$alumno->id}}">{{$alumno->name}}</option>
                </select>
                @error('alumno_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
                <select name="asignatura_id" id="">
                    @foreach ($asignaturas as $asignatura )
                        <option value="{{$asignatura->id}}">{{$asignatura->nombre}}</option>
                    @endforeach
                </select>
              @error('asignatura_id')
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
