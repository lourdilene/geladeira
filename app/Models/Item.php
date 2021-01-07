<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $dates = ['shelf_life'];

    protected $fillable = [
        'name',
        'quantity',
        'shelf_life'
    ];
}
