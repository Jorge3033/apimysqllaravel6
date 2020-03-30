<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.report');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
###############################################################
#                      Routes Categories                      #
###############################################################
*/
Route::get('/categories', 'web\CategoryController@report')->name('categories');
 /*
###############################################################
#                  end Routes Categories                      #
###############################################################
*/
/*
###############################################################
#                      Routes Products                        #
###############################################################
*/
Route::get('products', 'web\ProductController@report')->name('products');

/*
###############################################################
#                  end Routes Products                        #
###############################################################
*/
