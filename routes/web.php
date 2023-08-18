<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('plants', function(){
    return view('pages.plants');
});

Route::get('product', function(){
    return view('pages.product');
});


Route::get('authorisation', function(){
    return view('pages.authorisation');
});
