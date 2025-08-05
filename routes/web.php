<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\DeskripsiTambahanController;
use App\Http\Controllers\SkillController;

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

    Route::get('/deskripsi/create', [DeskripsiTambahanController::class, 'create'])->name('deskripsi.create');
    Route::post('/deskripsi', [DeskripsiTambahanController::class, 'store'])->name('deskripsi.store');
    Route::get('/deskripsi', [DeskripsiTambahanController::class, 'index'])->name('deskripsi.index');
    Route::delete('/deskripsi/{id}', [DeskripsiTambahanController::class, 'destroy'])->name('deskripsi.destroy');

    Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
    Route::get('/pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan.create');
    Route::post('/pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');
    Route::get('/pendidikan/{id}/edit', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
    Route::put('/pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
    Route::delete('/pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

    Route::get('/dashboard/skills/create', [SkillController::class, 'create'])->name('skills.create');
    Route::post('/dashboard/skills', [SkillController::class, 'store'])->name('skills.store');
    Route::get('/dashboard/skills/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit');
    Route::put('/dashboard/skills/{id}', [SkillController::class, 'update'])->name('skills.update');
    Route::delete('/dashboard/skills/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');
    Route::get('/dashboard/skills', [SkillController::class, 'index'])->name('skills.index');




});
require __DIR__.'/auth.php';
