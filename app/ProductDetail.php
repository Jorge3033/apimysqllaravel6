<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'store_id', 'product_id',
    ];
    protected $hidden = [
        'remember_token',
    ];
}
