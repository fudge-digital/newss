<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// public registration
Route::get('/daftar', [\App\Http\Controllers\RegistrationController::class, 'show'])->name('register.public');
Route::post('/daftar', [\App\Http\Controllers\RegistrationController::class, 'store'])->name('register.public.store');


require __DIR__.'/auth.php';
