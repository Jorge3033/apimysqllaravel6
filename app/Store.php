<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'avatars',
        'name',
        'location',
        'state',
        'municipality',
        'street',
        'interior_number',
        'exterior_number',
        'postal_code',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday',
        'seller_id',
        'verified_at'
    ];
    protected $hidden = [
        'remember_token',
    ];
    public function seller(){
        //relacion Pertenece a
        return $this->belongsTo(Seller::class,'seller_id','id');
    }
}
