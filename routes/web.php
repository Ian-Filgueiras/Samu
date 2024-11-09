<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProntuarioController;
use App\Http\Controllers\HospitalController;

Route::get('/', function () {
    return view('painel');
});

#prontuario
Route::get('/prontuario/create', [ProntuarioController::class, 'create'])->name('prontuario.create');
Route::post('/prontuario/store', [ProntuarioController::class, 'store'])->name('prontuario.store');

#Hospital
Route::get('/hospitals', [HospitalController::class, 'index']);
Route::get('/hospitals/{id}', [HospitalController::class, 'show']);
