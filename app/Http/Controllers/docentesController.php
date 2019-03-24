<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registers;
use App\docentes;

class docentesController extends Controller
{
    public function asignar($request)
    {
      $docente = registers::find($request);

      return view('asignar/asignar_docente', compact('docente'));
    }

    public function proc_asignacion()
    {
      docentes::create(request()->all());

      return redirect('main');
    }
}
