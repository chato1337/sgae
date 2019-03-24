@extends('layouts.app')

@section('titulo')
  editar registro
@endsection

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">
                  <div class="card-header">Editar registro: </div>

                  <div class="card-body">

                    {!! Form::model($registro, ['url' => 'edicion_registro', 'method' => 'POST']) !!}

                      @include('layouts.formularioRegistro')

                      <input class="btn btn-warning" type="submit" name="" value="Crear registro">

                    {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
