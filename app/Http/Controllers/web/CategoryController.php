<?php

namespace App\Http\Controllers\web;

use App\Exports\CategoryExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function report(){

        $data=Category::all();
        return view('system.categories.report')
                ->with('data',$data);

    }

    public function export(){
        return Excel::download(new CategoryExport, 'allcategories.xls');
    }

}
