@extends('layouts.app')

@section('titulo')
  dashboard
@endsection

@section('content')
  <div class="container">
      <div class="row">
          <div class="col text-center">
              <h1>MENU PRINCIPAL</h1>
              <h2>SGAE - SISTEMA DE GESTION ACADEMICA ESCOLAR</h2>
          </div>
      </div>
      <div class="row mt-4">
        <div class="col text-center mt-4">
          <img src="#" alt="por aca va el logo">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a class="btn btn-primary" href="crear_registro">registrar persona</a>
        </div>
        <div class="col">
          <a class="btn btn-primary" href="#">consular las notas</a>
        </div>
        <div class="col">
          <a class="btn btn-primary" href="#">consular estudiantes</a>
        </div>
        <div class="col">
          <a class="btn btn-primary" href="#">consular maestros</a>
        </div>
      </div>
  </div>
@endsection
