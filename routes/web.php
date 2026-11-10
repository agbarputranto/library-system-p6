<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Route untuk pengguna yang belum login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

// Route yang hanya dapat diakses setelah login
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Book Management
    Route::resource('books', BookController::class);

    // Category Management
    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');

    // Member Management
    Route::get('/members', [MemberController::class, 'index'])
        ->name('members.index');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});

// Route khusus Admin untuk mengelola pengguna
Route::middleware(['auth', 'can:manage-users'])->group(function () {
    Route::resource('users', UserController::class);
});