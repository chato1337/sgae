@extends('layouts.app')

@section('titulo')
  nuevo registro
@endsection

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">
                  <div class="card-header">Crear un nuevo registro: </div>

                  <div class="card-body">

                    {!! Form::open(['url' => 'creacion_registro', 'method' => 'POST']) !!}

                      @include('layouts.formularioRegistro')

                      <input class="btn btn-success" type="submit" name="" value="Crear registro">

                    {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
