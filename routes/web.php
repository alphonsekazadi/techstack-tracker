<?php

use App\Http\Controllers\TechnoController;
use Illuminate\Support\Facades\Route;

// Web Routes 
Route::get('/', [TechnoController::class, 'index'])->name('techno.index');
Route::post('/technos', [TechnoController::class, 'store'])->name('techno.store');
