<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function report(){

        $products=Product::with('category')->get();

        return view('system.products.report')
                ->with('data',$products);
        //  return $products;
    }
}
