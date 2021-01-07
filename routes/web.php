<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ItemController
};

Route::get('/items', [ItemController::class, 'index']);

Route::get('/items/create', [ItemController::class, 'create']);
Route::post('/items', [ItemController::class, 'store']);

Route::delete('/items/{id}', [ItemController::class, 'destroy']);

Route::get('/items/{id}/edit', [ItemController::class, 'edit']);
Route::put('/items/{id}', [ItemController::class, 'update']);
