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
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
/*
###############################################################
#                      Routes Categories                      #
###############################################################
*/
Route::get('/categories', 'web\CategoryController@report')->name('categories');

/*
###############################################################
#                      Routes Products                        #
###############################################################
*/
Route::get('products', 'web\ProductController@report')->name('products');

/*
###############################################################
#                      Routes Pay Modes                       #
###############################################################
*/
Route::get('/paymodes', 'web\PayModeController@report')->name('paymodes');
/*
###############################################################
#                  Routes Store Services                      #
###############################################################
*/
Route::get('/storeservices', 'web\StoreServiceController@report')->name('storeservices');
/*
###############################################################
#                  Routes Store Services                      #
###############################################################
*/
Route::get('/storetypes', 'web\StoreTypeController@report')->name('storetypes');
/*
###############################################################
#                      Routes Sellers                         #
###############################################################
*/
Route::get('/sellers', 'web\SellerController@report')->name('sellers');
/*
###############################################################
#                        Routes Stores                        #
###############################################################
*/
Route::get('/stores', 'web\StoreController@report')->name('stores');

