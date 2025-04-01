<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
use App\Http\Middleware\Training;
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
Route::name("/trainings.")->group(function(){
    Route::middleware(Training::class)->group(function () {
            Route::get('', [TrainingController::class, 'index'])->name('trainings.index');
            Route::get('create', [TrainingController::class, 'create'])->name('trainings.create');
            Route::post('', [TrainingController::class, 'store'])->name('trainings.store');
            Route::get('{id}/edit', [TrainingController::class, 'edit'])->name('trainings.edit');
            Route::put('/{id}', [TrainingController::class, 'update'])->name('trainings.update');
            Route::delete('/{id}', [TrainingController::class, 'destroy'])->name('trainings.destroy');
    });
});



require __DIR__.'/auth.php';

