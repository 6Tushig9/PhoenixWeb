<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page');
});

Route::get('/page1', function(){
    return view('page1');
});
