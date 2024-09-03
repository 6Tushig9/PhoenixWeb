<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::controller(RoutePages::class)->group(function (){
    Route::get('/', 'showmain');
    Route::get('/showmainpage', 'showmainpage');
    Route::get('/', 'phoenixsheater');
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
    Route::post('/sanal', 'sanal_huselt');
});

Route::get('/test', function(){
    return view('test', ['products'=>Product::all()]);
});

Route::get('/product-model/{id}', [ProductModel::class, 'subcategory'])->name('product-model.show');

Route::post('/typecategory/store', [ProductModel::class, 'store'])->name('typecategory.store');