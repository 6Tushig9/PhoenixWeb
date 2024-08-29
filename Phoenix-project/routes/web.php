<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::controller(RoutePages::class)->group(function (){
    Route::get('/', 'showmain');
    Route::get('/', 'showmainpage');
    Route::get('/phoenixsheater', 'phoenixsheater');
    Route::get('/company', 'company');
    Route::get('/ecological', 'ecological');
    Route::get('/calculate', 'calculate');
    Route::get('/advice', 'advice');
    Route::get('/buypage', 'buypage');
    Route::get('/shoppingcart', 'shoppingcart');
    Route::get('/faq', 'faq');
});

Route::controller(Posts::class)->group(function (){
    Route::post('/hamtrah', 'hamtrah_huselt');
});