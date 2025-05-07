<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\DokumentasiController;

// Authentication Routes
Auth::routes();

Route::get('/formulir-pendaftaran/{kegiatan}', [PanitiaController::class, 'formulirPendaftaran'])->name('formulir.pendaftaran');

Route::get('/formulirPendaftaran', function () {
    return view('formulir_pendaftaran');
});

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Kepanitiaan Routes
Route::get('/daftar-panitia', [PanitiaController::class, 'index'])->name('daftar.panitia');
Route::get('/daftar-kepanitiaan', [PanitiaController::class, 'daftarKepanitiaan'])->name('daftar.kepanitiaan');
Route::get('/formulir-pendaftaran/{kegiatan}', [PanitiaController::class, 'formulirPendaftaran'])->name('formulir.pendaftaran');
Route::post('/daftarpanitia/{kegiatan}', [PanitiaController::class, 'daftar'])->name('panitia.daftar');

// Sertifikat Routes
Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat');
Route::get('/sertifikat/{id}/download', [SertifikatController::class, 'download'])->name('sertifikat.download');

// Dokumentasi Routes
Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi');

// Pelaporan Routes
Route::get('/pelaporan', [PelaporanController::class, 'index'])->name('pelaporan');

Auth::routes();
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', function () {
    return view('login-register.register');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', function () {
    return view('login-register.login');
});

Route::get('/tes', function () {
    return view('formulir_pendaftaran');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
