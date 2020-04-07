<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\StoreType;
use Illuminate\Http\Request;

class StoreTypeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('seller');
    }
    public function report(){
        $data=StoreType::all();
        return view('system.storeTypes.report')
                ->with('data',$data);

    }
}
