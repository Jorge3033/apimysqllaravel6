<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\StoreService;
use Illuminate\Http\Request;

class StoreServiceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('seller');
    }
    public function report(){

      $data=StoreService::all();

      return view('system.storeServices.report')
             ->with('data',$data);

    }
}
