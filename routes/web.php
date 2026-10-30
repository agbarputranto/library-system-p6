<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthController;

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('books', BookController::class);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/members', [MemberController::class, 'index']);


// Route untuk pengguna yang belum login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

// Route logout hanya dapat diakses oleh pengguna yang sudah login
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Route buku hanya dapat diakses oleh pengguna yang sudah login
Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
});