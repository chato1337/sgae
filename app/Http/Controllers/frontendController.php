<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {
      return view('indice');
    }

    public function about()
    {
      return view('acerca_de');
    }
}
