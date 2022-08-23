<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimauxController;
use App\Http\Controllers\NewAnimalController;


Route::get('/', [AnimauxController::class,"index"])->name("animal");
Route::delete('/animal/{id}/delete', [AnimauxController::class,"destroy"]);
Route::get('/editAnimal/{id}', [AnimauxController::class,"show"]);
Route::put('/editAnimal/{id}/update', [AnimauxController::class,"update"]);

Route::get('/newAnimal', [NewAnimalController::class,"index"])->name("newAnimal");
Route::post('/newAnimal/create', [NewAnimalController::class,"store"]);
