<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;

Route::get('/', [CustomerController::class, 'index']);
Route::get('/contact', [CustomerController::class, 'contact']);
Route::get('/about', [CustomerController::class, 'about']);


    Route::get('/list', [CustomerController::class, 'list']);
    Route::get('/add', [CustomerController::class, 'roomBook']);
    Route::post('/add', [CustomerController::class, 'add']);
    Route::get('/edit/{id}', [CustomerController::class, 'edit']);
    Route::put('/edit/{id}', [CustomerController::class, 'update']);
    Route::put('/edit/{id}', [RoomController::class, 'edit']);

    Route::get('/delete/{id}', [CustomerController::class, 'delete']);
    Route::get('/pricing', [RoomController::class, 'roomPrice'])->name('room-price');
    Route::get('/room-list', [RoomController::class, 'index'])->name('room-list');
    Route::get('/room-create', [RoomController::class, 'create'])->name('room-create');
    Route::post('/room-store', [RoomController::class, 'store'])->name('room-store');
    Route::get('/available-rooms', [RoomController::class, 'availableRoom'])->name('availableRoom');