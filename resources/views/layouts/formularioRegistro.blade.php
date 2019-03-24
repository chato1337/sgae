<div class="row collapse">

  <input type="text" name="user_id" value="{{ Auth::user()->id }}">

</div>


<div class="row">
  <div class="col">

    <label for="">tipo de documento</label>
    {!! Form::select('tipo_documento', [
      'CEDULA DE CIUDADANIA' => 'CEDULA DE CIUDADANIA',
      'TARJETA DE IDENTIDAD' => 'TARJETA DE IDENTIDAD',
      'REGISTRO CIVIL' => 'REGISTRO CIVIL',
      'CEDULA DE EXTRANGERIA' => 'CEDULA DE EXTRANGERIA',
      'PASAPORTE' => 'PASAPORTE',
      'SIN DOCUMENTO' => 'SIN DOCUMENTO'
    ], null, ['class' => 'custom-select', 'placeholder' => 'seleccionar']) !!}

  </div>

  <div class="col">
    <label for="">Numero de documento </label>
    {!! Form::number('num_documento', null, ['class' => 'form-control', 'placeholder' => '1122334455']) !!}
  </div>

  <div class="col">
    <label for="">departamento de expedicion</label>
    {!! Form::select('departamento_expedicion', [
      'CAUCA' => 'CAUCA'
    ], null, ['class' => 'custom-select', 'placeholder' => 'seleccionar']) !!}
  </div>

  <div class="col">
    <label for="">ciudad de expedicion</label>
    {!! Form::select('ciudad_expedicion', [
      'CORINTO' => 'CORINTO'
    ], null, ['class' => 'custom-select', 'placeholder' => 'seleccionar']) !!}
  </div>

</div>

<div class="row">

  <div class="col">
    <label for="">fecha de expedición:</label>
    {!! Form::date('fecha_expedicion', null, ['class' => 'form-control']) !!}
  </div>

  <div class="col">
    <label for="">Dirección:</label>
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
  </div>

</div>

<div class="row mt-4">

  <div class="col">
    <label for="">Primer nombre:</label>
    {!! Form::text('nombre1', null, ['class' => 'form-control']) !!}
  </div>

  <div class="col">
    <label for="">Segundo nombre:</label>
    {!! Form::text('nombre2', null, ['class' => 'form-control']) !!}
  </div>

  <div class="col">
    <label for="">Primer apellido:</label>
    {!! Form::text('apellido1', null, ['class' => 'form-control']) !!}
  </div>

  <div class="col">
    <label for="">Segundo apellido:</label>
    {!! Form::text('apellido2', null, ['class' => 'form-control']) !!}
  </div>

</div>

<div class="row mt-4 mb-4">

  <div class="col">
    <label for="">fecha de nacimiento:</label>
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
  </div>

  <div class="col">
    <label for="">departamento de nacimiento</label>
    {!! Form::select('departamento_nacimiento', [
      'CAUCA' => 'CAUCA'
    ], null, ['class' => 'custom-select', 'placeholder' => 'seleccionar']) !!}
  </div>

  <div class="col">
    <label for="">ciudad de nacimiento</label>
    {!! Form::select('ciudad_nacimiento', [
      'CORINTO' => 'CORINTO'
    ], null, ['class' => 'custom-select', 'placeholder' => 'seleccionar']) !!}
  </div>

</div>
