<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\KeteranganController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\RiwayatController;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('diagnosis', DiagnosisController::class);
Route::resource('keluhan', KeluhanController::class);
Route::resource('keterangan', KeteranganController::class);
Route::resource('tentang', TentangController::class);
Route::resource('riwayat', RiwayatController::class);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');