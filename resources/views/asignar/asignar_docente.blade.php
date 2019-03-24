@extends('layouts.app')

@section('titulo')
  asignar docente
@endsection

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Asignar nuevo docente</div>

                  <div class="card-body">

                      {!! Form::open(['url' => 'asignacion_docente', 'method' => 'POST']) !!}

                        @include('layouts.asignarDocente')

                        <input class="btn btn-primary" type="submit" name="" value="Asignar docente">

                      {!! Form::close() !!}

                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection
