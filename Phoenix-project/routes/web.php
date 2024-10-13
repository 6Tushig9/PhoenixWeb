<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\User;

Route::controller(RoutePages::class)->group(function (){
    Route::get('/', 'phoenixsheater');
    Route::get('/company', 'company');
    Route::get('/ecological', 'ecological');
    Route::get('/calculate', 'calculate');
    Route::get('/advice', 'advice');
    Route::get('/buypage', 'buypage');
    Route::get('/buypage/{id}','bpage')->name('buy');
    Route::get('/shoppingcart', 'shoppingcart');
    Route::get('/shoppingcart/{id}', 'shopping')->name('shopping');
    Route::get('/faq', 'faq');
});
Route::controller(CustomerReact::class)->group(function(){
    Route::post('/hamtrah','hamtrah');
    Route::post('/sanal','sanal');
});

Route::controller(Register::class)->group(function(){
    Route::post('/login','login');
    Route::post('/logout','logout');
});

Route::get('/test', function(Request $request){
    $user=User::find(1);
    return response()->json(['data'=>$user->notifications]);
});
