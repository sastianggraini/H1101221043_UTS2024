<?php

use App\Http\Controllers\TestingController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\PresensiPegawaiController;
use App\Http\Controllers\MasterJabatanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('testing');
});

Route::get('/', [TestingController::class, 'index']);

Route::get('/gaji', [GajiController::class, 'index']);

Route::get('/masterjabatan', [MasterJabatanController::class, 'index']);

Route::get('/presensipegawai', [PresensiPegawaiController::class, 'index']);
