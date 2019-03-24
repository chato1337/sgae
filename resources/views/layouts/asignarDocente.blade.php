<div class="collapse">
  <input type="text" name="user_id" value="{{ $docente->user_id }}">
  <input type="text" name="expediente_id" value="{{ $docente->id }}">
</div>

<div class="row mb-4">

  <div class="col">
    <label for="">nombres y apellidos</label>
    <input readonly class="form-control" type="text" name="nombres_apellidos" value="{{ $docente->nombre1 }} {{ $docente->apellido1 }}">
  </div>

  <div class="col">
    <label for="">Asignatura</label>
    {!! Form::select('asignatura', [
      'MATEMATICAS' => 'MATEMATICAS',
      'ESPAÑOL' => 'ESPAÑOL',
      'SISTEMAS' => 'SISTEMAS',
      'SOCIALES' => 'SOCIALES',
      'NATURALES' => 'NATURALES',
      'INGLES' => 'INGLES'
    ], null, ['class' => 'custom-select', 'placeholder' => 'seleccionar']) !!}
  </div>

</div>
