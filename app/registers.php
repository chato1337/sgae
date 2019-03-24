<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registers extends Model
{
    protected $table = 'DatosBasicos';
    protected $guarded = ['id'];

//mutador para convertir nombres y apellidos en mayusculas
public function setnombre1Attribute($value)
{
  return $this->attributes['nombre1'] = strtoupper($value);
}
public function setnombre2Attribute($value)
{
  return $this->attributes['nombre2'] = strtoupper($value);
}
public function setapellido1Attribute($value)
{
  return $this->attributes['apellido1'] = strtoupper($value);
}
public function setapellido2Attribute($value)
{
  return $this->attributes['apellido2'] = strtoupper($value);
}

}
