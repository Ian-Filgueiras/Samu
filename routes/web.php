<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProntuarioController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/prontuario/create', [ProntuarioController::class, 'create'])->name('prontuario.create');
Route::post('/prontuario/store', [ProntuarioController::class, 'store'])->name('prontuario.store');

