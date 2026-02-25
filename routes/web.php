<?php

use App\Http\Controllers\TechnoController;
use Illuminate\Support\Facades\Route;

// This is web routes
Route::get('/', [TechnoController::class, 'index'])->name('techno.index');
Route::post('/technos', [TechnoController::class, 'store'])->name('techno.store');

Route::get('/home', function () {
    return view('home');
});