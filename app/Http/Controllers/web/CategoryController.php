<?php

namespace App\Http\Controllers\web;

use App\Exports\CategoryExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Middleware\roles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('seller');
    }

    public function report(){

        $data=Category::all();
        return view('system.categories.report')
                ->with('data',$data);

    }

    public function export(){
        return Excel::download(new CategoryExport, 'allcategories.xls');
    }

}
