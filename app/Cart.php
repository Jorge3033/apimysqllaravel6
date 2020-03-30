<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id', 'user_id',
    ];
    protected $hidden = [
        'remember_token',
    ];
}
