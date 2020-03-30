<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreComment extends Model
{
    protected $fillable = [
        'store_id',
        'user_id',
        'comment',
        'stars'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
