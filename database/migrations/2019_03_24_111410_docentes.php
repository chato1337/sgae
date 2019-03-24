<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Docentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Docentes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedInteger('user_id')->nullable();
          $table->unsignedInteger('expediente_id')->nullable();
          // $table->unsignedInteger('grado_id')->nullable();
          $table->string('nombres_apellidos');
          $table->string('asignatura');
          $table->timestamps();

          // pendiente las relaiciones de la tabla

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('Docentes');
    }
}
