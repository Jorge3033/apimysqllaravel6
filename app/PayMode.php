<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayMode extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
    protected $hidden = [
        'remember_token',
    ];
}
