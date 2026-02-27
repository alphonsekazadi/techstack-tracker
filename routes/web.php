<?php

use App\Http\Controllers\TechnoController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', [TechnoController::class, 'index'])->name('home');

// Technologies
Route::get('/technologies', [TechnoController::class, 'technologies'])->name('technologies');

// Progress
Route::get('/progress', [TechnoController::class, 'progress'])->name('progress');

// CRUD routes
Route::resource('technos', TechnoController::class);
Route::patch('technos/{techno}/toggle', [TechnoController::class, 'toggleMaitrise'])->name('technos.toggle');