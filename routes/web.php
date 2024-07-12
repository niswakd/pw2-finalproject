<?php

use App\Http\Controllers\LoanController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('detail', [LandingController::class, 'detail'])->name('detail');
Route::get('suv', [LandingController::class, 'suv'])->name('suv');
Route::get('mpv', [LandingController::class, 'mpv'])->name('mpv');
Route::get('crossover', [LandingController::class, 'crossover'])->name('crossover');
Route::get('citycar', [LandingController::class, 'citycar'])->name('citycar');
Route::get('stationwagon', [LandingController::class, 'stationwagon'])->name('stationwagon');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/products', [ProductController::class, 'index']);
    Route::resource('cars', CarController::class);
    Route::resource('types', TypeController::class);
    Route::resource('loans', LoanController::class);
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
