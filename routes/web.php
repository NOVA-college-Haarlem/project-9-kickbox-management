<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;

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

Route::middleware(['training'])->group(function () {
    Route::get('/', [TrainingController::class, 'index'])->name('trainings.index');
    Route::get('/create', [TrainingController::class, 'create'])->name('trainings.create');
    Route::post('/', [TrainingController::class, 'store'])->name('trainings.store');
    Route::get('/{id}', [TrainingController::class, 'show'])->name('trainings.show');
});

require __DIR__.'/auth.php';

