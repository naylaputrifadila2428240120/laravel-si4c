<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/prodi', [ProdiController::class, 'index']);