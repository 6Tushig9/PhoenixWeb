<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use app\Models\User;

Route::get('/', function () {
    return view('main');
});

Route::get('/Company', function(){
    return view('page.Company', [
        'var' => User::all(),
        'var1'=>'dsds',
        "var2"=>1222,
        ]
    );
});

Route::get('/PhoenixSheater', function(){
    return view('page.PhoenixSheater');
});

Route::get('/Company', function(){
    return view('page.Company');
});

Route::get('/Ecological', function(){
    return view('page.Ecological');
});

Route::get('/Calculate', function(){
    return view('page.Calculate');
});

Route::get('/Advice', function(){
    return view('page.Advice');
});

Route::get('/BuyPage', function(){
    return view('page.BuyPage');
});

Route::get('/ShoppingCart', function(){
    return view('page.ShoppingCart');
});

Route::get('/FAQ', function(){
    return view('page.FAQ');
});

