<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProyekController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [PageController::class, 'profile'])->name('profile');
    Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

    Route::middleware('role:admin')->group(function () {
        Route::resource('kategori', KategoriController::class)->except('show');
        Route::resource('proyek', ProyekController::class)->except(['index', 'show']);
    });
});
