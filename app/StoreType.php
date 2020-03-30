<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreType extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
    protected $hidden = [
        'remember_token',
    ];
}
