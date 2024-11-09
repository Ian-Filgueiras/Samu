<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/get_location', [LocationController::class, 'getLocation'])->name('get_location');