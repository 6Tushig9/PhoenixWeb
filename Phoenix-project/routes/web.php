<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin;

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


Route::get('/test', function(){
    return view('test', ['products'=>Product::all()]);
});

Route::get('/pro',function(){
    return view('production.Production_Upload');
});

Route::get('/category/{id}',function($id){
    return view('product.category', ['id'=>$id]);
})->name('category');

