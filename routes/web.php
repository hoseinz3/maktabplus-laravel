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



Route::get('/', 'PagesController@index');

Route::get('/about-us','PagesController@aboutUs');

Route::get('/products',function(){
    $product = DB::table('products')
    //    ->where('name', 'like', '%8%')
    //    ->where('description', 'like', '%Phone%')
        ->first()
        ;
    dd($product);
});



