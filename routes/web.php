<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ItemController
};

Route::get('/items', [ItemController::class, 'index']);

Route::get('/items/{id}/edit', [ItemController::class, 'edit']);