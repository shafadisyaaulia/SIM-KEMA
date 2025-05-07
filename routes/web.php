<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\PelaporanController;

// Authentication Routes
Auth::routes();

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Kepanitiaan Routes
Route::get('/daftar-panitia', [PanitiaController::class, 'index'])->name('daftar.panitia');
Route::get('/daftar-kepanitiaan', [PanitiaController::class, 'daftarKepanitiaan'])->name('daftar.kepanitiaan');
Route::get('/formulir-pendaftaran/{kegiatan}', [PanitiaController::class, 'formulirPendaftaran'])->name('formulir.pendaftaran');
Route::post('/daftar-panitia/{kegiatan}', [PanitiaController::class, 'daftar'])->name('panitia.daftar');

// Sertifikat Routes
Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat');
Route::get('/sertifikat/{id}/download', [SertifikatController::class, 'download'])->name('sertifikat.download');

// Dokumentasi Routes
Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi');

// Pelaporan Routes
Route::get('/pelaporan', [PelaporanController::class, 'index'])->name('pelaporan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
