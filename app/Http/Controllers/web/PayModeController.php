<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\PayMode;
use Illuminate\Http\Request;

class PayModeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('admin');
    }
    function report(){

      $data=PayMode::all();
      return view('system.payModes.report')
              ->with('data',$data);
    }
}
