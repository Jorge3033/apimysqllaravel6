<?php

namespace App\Http\Controllers\web;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function report(){
        return view('system.categories.report');
    }
}
