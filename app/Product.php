<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey='id';
    protected $fillable = [
        'avatars', 'name','price','marker','stock','status','category_id'
    ];
    protected $hidden = [
        'remember_token',
    ];

    // has many muchos a muchos

    //Muchos a uno

    public function category(){
        //relacion Pertenece a
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
