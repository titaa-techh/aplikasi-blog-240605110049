<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HalamanController;

// ================== HALAMAN BERANDA (PUBLIK) ==================
Route::get('/', [HalamanController::class, 'index'])->name('beranda');


// ================== HALAMAN ADMIN (CMS) ==================

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.proses');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('kategori', KategoriArtikelController::class);
    Route::resource('penulis', PenulisController::class);
    Route::resource('artikel', ArtikelController::class)->except(['show']);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


// ================== HALAMAN DETAIL ARTIKEL (PUBLIK) ==================
// Diletakkan PALING BAWAH agar tidak menabrak /artikel/create, /artikel/{id}/edit, dll
Route::get('/artikel/{id}', [HalamanController::class, 'show'])->name('artikel.show');