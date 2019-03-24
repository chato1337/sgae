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

                    {!! Form::model($registro, ['url' => "edicion_registro/{$registro->id}", 'method' => 'PATCH']) !!}

                      @include('layouts.formularioRegistro')

                      <input class="btn btn-warning" type="submit" name="" value="Editar registro">

                    {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
