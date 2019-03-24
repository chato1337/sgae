<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosBasicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('DatosBasicos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedInteger('user_id')->nullable();
        $table->string('rol')->default('ninguno');
        $table->string('tipo_documento');
        $table->string('num_documento');
        $table->string('nombre1');
        $table->string('nombre2');
        $table->string('apellido1');
        $table->string('apellido2');
        $table->string('fecha_nacimiento');
        $table->string('departamento_nacimiento');
        $table->string('ciudad_nacimiento');
        $table->string('fecha_expedicion');
        $table->string('departamento_expedicion');
        $table->string('ciudad_expedicion');
        $table->string('direccion');
        $table->timestamps();


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('DatosBasicos');
    }
}
