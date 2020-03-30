<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'photo',
        'status',
        'verified_at',
        'user_id'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
