<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function report(){
        $stores=Store::with('seller')->get();
        return view('system.stores.report')
                ->with('data',$stores);
    }
}
