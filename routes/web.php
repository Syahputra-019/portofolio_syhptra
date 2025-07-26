<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\DeskripsiTambahanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [TentangController::class, 'welcome'])->name('home');

Route::get('/dashboard', [TentangController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/edit-custom', [ProfileController::class, 'editCustom'])->name('profile.edit.custom');
    Route::post('/profile/update-custom', [ProfileController::class, 'updateCustom'])->name('profile.update.custom');

    Route::get('/tentangs', [\App\Http\Controllers\TentangController::class, 'index'])->name('tentangs.index');
    Route::get('/tentangs/create', [\App\Http\Controllers\TentangController::class, 'create'])->name('tentangs.create');
    Route::post('/tentangs', [\App\Http\Controllers\TentangController::class, 'store'])->name('tentangs.store');

    Route::get('/tentang/edit', [TentangController::class, 'edit'])->name('tentangs.edit');
    Route::put('/tentangs/{id}', [TentangController::class, 'update'])->name('tentangs.update');

    // web.php
    Route::get('/deskripsi/create', [DeskripsiTambahanController::class, 'create'])->name('deskripsi.create');
    Route::post('/deskripsi', [DeskripsiTambahanController::class, 'store'])->name('deskripsi.store');
    Route::get('/deskripsi', [DeskripsiTambahanController::class, 'index'])->name('deskripsi.index');
    Route::delete('/deskripsi/{id}', [DeskripsiTambahanController::class, 'destroy'])->name('deskripsi.destroy');

});
require __DIR__.'/auth.php';
