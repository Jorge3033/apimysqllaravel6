<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
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

    public function user(){
        //relacion Pertenece a
        return $this->belongsTo(User::class,'user_id','id');
    }

}
