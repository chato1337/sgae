<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registers;

class registrosController extends Controller
{
    public function crear_registro()
    {
      return view('crear/crear_registro');
    }

    public function proc_creacion()
    {

      registers::create(request()->all());

      return redirect('main');
    }
}
