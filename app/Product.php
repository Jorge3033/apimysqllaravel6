<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'avatars', 'name','price','marker','stock','status','category_id'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
