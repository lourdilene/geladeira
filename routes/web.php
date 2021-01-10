<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ItemController
};

Route::get('/items', 'ItemController@index');

Route::get('/items/create', 'ItemController@create');
Route::post('/items', 'ItemController@store');

Route::delete('/items/{id}', 'ItemController@destroy');

Route::get('/items/{id}/edit', 'ItemController@edit');
Route::put('/items/{id}', 'ItemController@update');
