<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\PayMode;
use Illuminate\Http\Request;

class PayModeController extends Controller
{
    function report(){

      $data=PayMode::all();
      return view('system.payModes.report')
              ->with('data',$data);
    }
}
