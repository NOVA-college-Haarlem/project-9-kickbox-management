<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;

Route::get('/', function () {
    return view('welcome');
});

Route::name("training.")->group(function(){
    
    Route::prefix("training")->group(function(){        
        Route::get('/',                 [TrainerController::class, 'index'])->name('index');
    });
});