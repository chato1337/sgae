<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function main()
    {
      return view('main');
    }
}
