<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreDetail extends Model
{
    protected $fillable = [
        'store_id',
        'store_services_id',
        'pay_mode_id'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
