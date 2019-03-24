@extends('layouts.app')

@section('titulo')
  Registros
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Registros en Base de datos</div>

                <div class="card-body">

                  <table class="table">
                    <thead>
                      <th>id</th>
                      <th>nombres y apellidos</th>
                      <th>documento</th>
                      <th>fecha de creacion</th>
                      <th>accion</th>
                    </thead>
                    <tbody>
                      @foreach ($registros as $registro)
                        <tr>
                          <td>{{ $registro->id }}</td>
                          <td>{{ $registro->nombre1 }} {{ $registro->nombre2 }} {{ $registro->apellido1 }} {{ $registro->apellido2 }}</td>
                          <td>{{ $registro->num_documento }}</td>
                          <td>{{ $registro->created_at }}</td>
                          <td> <a class="btn btn-warning" href="editar_registro/{{ $registro->id }}">editar</a> </td>
                          <td> <a class="btn btn-info" href="asignar_docente/{{ $registro->id }}">Asignar rol</a> </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
