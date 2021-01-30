<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

   
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/list', [CustomerController::class, 'list']);
    Route::view('/add', 'add');
    Route::post('/add', [CustomerController::class, 'add']);
    Route::get('/edit/{id}', [CustomerController::class, 'edit']);
    Route::put('/edit/{id}',[CustomerController::class, 'update']);
    Route::get('/delete/{id}', [CustomerController::class, 'delete']);

