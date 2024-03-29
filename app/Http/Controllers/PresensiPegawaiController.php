<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiPegawaiController extends Controller
{
  public function index()
  {
    return view('presensipegawai');
  }
}