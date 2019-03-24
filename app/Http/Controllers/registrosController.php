<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registers;

class registrosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function listar_registros()
    {
      $registros = registers::orderBy('id', 'DESC')->get();

      return view('listar_registros', compact('registros'));
    }

    public function crear_registro()
    {
      return view('crear/crear_registro');
    }

    public function proc_creacion()
    {

      registers::create(request()->all());

      return redirect('main');
    }

    public function editar_registro($request)
    {
      $registro = registers::find($request);

      return view('editar/editar_registro', compact('registro'));
    }
}
