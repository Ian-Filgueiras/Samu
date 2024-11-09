<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProntuarioController;
use App\Http\Controllers\HospitalController;

#prontuario
Route::get('/prontuario/create', [ProntuarioController::class, 'create'])->name('prontuario.create');
Route::post('/prontuario/store', [ProntuarioController::class, 'store'])->name('prontuario.store');
Route::get('/prontuarios', [ProntuarioController::class, 'index'])->name('prontuario.index');
Route::get('/prontuario/{id}', [ProntuarioController::class, 'show'])->name('prontuario.show');

#Hospital
Route::get('/hospitals', [HospitalController::class, 'index']);
Route::get('/hospitals/{id}', [HospitalController::class, 'show']);

