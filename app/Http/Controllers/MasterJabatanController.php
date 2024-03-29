<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterJabatanController extends Controller
{
  public function index()
  {
    return view('masterjabatan');
  }
}