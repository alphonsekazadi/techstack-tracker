<?php

use App\Http\Controllers\TechnoController;
use Illuminate\Support\Facades\Route;

// This is web routes

// Get techno route
Route::get('/', [TechnoController::class, 'index'])->name('techno.index');

// Post techno route
Route::post('/technos', [TechnoController::class, 'store'])->name('techno.store');

// Delete route
Route::delete('/techno/{techno}', [TechnoController::class, 'destroy'])->name('techno.destroy');