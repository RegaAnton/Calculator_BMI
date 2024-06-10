<?php

use App\Http\Controllers\BMIController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BMIController::class, 'index'])->name('index');
Route::post('/', [BMIController::class, 'bmi'])->name('bmi');
Route::get('/hasil', [BMIController::class, 'hasil'])->name('hasil');