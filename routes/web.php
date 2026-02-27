<?php

use App\Http\Controllers\TechnoController;
use Illuminate\Support\Facades\Route;

// This is web routes
Route::resource('technos', TechnoController::class);
Route::patch('technos/{techno}/toggle', [TechnoController::class, 'toggleMaitrise'])->name('technos.toggle');