<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Filament\Resources\DemoResource;

Route::controller(RoutePages::class)->group(function (){
    Route::get('/', 'phoenixsheater');
    Route::get('/company', 'company');
    Route::get('/ecological', 'ecological');
    Route::get('/calculate', 'calculate');
    Route::get('/advice', 'advice');
    Route::get('/buypage', 'buypage');
    Route::get('/shoppingcart', 'shoppingcart');
    Route::get('/faq', 'faq');
    Route::get('/login', 'login');
    Route::get('/upload','upload');
});

Route::controller(CustomerReact::class)->group(function(){
    Route::post('/hamtrah','hamtrah');
    Route::post('/sanal','sanal');
});