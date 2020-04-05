<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{

    public function report(){
        $sellers= Seller::with('user')->get();
        return view('system.sellers.report')
                    ->with('data',$sellers);
    }

}
