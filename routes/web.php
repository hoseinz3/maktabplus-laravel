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
//example.com
//Route::get('/', function () {
//    //query from database
//    return view('welcome');
//});


use App\Product;

Route::get('/', 'PagesController@index');

Route::get('/about-us', 'PagesController@aboutUs');

Route::get('/products', function () {

    $products = Product::all();
    return view('products.index', compact('products'));
});

Route::get('/products/{id}', function ($id) {

    $product = Product::find($id);
    return view('products.show', compact('product'));

});


