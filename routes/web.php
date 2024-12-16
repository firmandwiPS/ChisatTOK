<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;



// Route default yang mengarahkan ke halaman login
Route::get('/', function () {
    return redirect()->route('login'); // Redirect ke halaman login
});

// Atau, jika menggunakan controller untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Dalam routes/web.php
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('orders', App\Http\Controllers\OrderController::class);
});


require __DIR__.'/auth.php';
