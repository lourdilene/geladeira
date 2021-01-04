<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ItemController
};

Route::get('/items', [ItemController::class, 'index'] );

Route::get('/products', function () {
    $data = [
        [
            'name' => 'Manteiga',
            'shelf_time' => now()
        ],
        [
            'name' => 'Alface cor-de-rosa',
            'shelf_time' => now()
        ],
        [
            'name' => 'Iogurte desnatado',
            'shelf_time' => now()
        ]
    ];
    
    return view('product', [
        'products' => $data
    ]);
});