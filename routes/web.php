<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosisController;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('diagnosis', DiagnosisController::class);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');