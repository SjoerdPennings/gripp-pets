<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PetController::class, 'index']);

Route::post('/add-pet', [PetController::class, 'store'])->name('add-pet');

Route::get('/delete-pet/{id}', [PetController::class, 'destroy'])->name('delete-pet');