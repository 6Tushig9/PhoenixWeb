<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/Company', function(){
    return view('page.Company');
});

Route::get('/Ecological', function(){
    return view('page.Ecological');
});

Route::get('/PhoenixSheater', function(){
    return view('page.PhoenixSheater');
});

Route::get('/Calculate', function(){
    return view('page.Calculate');
});

Route::get('/Advice', function(){
    return view('page.Advice');
});

