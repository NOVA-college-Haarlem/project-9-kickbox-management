<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
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

require __DIR__.'/auth.php';

Route::get('/trainings', [TrainingController::class, 'index'])->name('trainings.index');
Route::get('/trainings/create', [TrainingController::class, 'create'])->name('trainings.create');
Route::post('/trainings', [TrainingController::class, 'store'])->name('trainings.store');
Route::get('/trainings/{id}', [TrainingController::class, 'show'])->name('trainings.show');
