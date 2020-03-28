<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function report(){
        $data=Product::all();
        return view('system.products.report')
                ->with('data',$data);
    }
}
