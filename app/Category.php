<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $primarykey='id';
    protected $fillable = [
        'name', 'description',
    ];
    protected $hidden = [
        'remember_token',
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }

}
