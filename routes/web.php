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



Route::get('/', function(){
    return view('welcome');
});

Route::get('/about-us', function(){
    return view('aboutUs');
});


