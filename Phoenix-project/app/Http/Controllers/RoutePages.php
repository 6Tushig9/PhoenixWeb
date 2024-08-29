<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostOruulah;

class RoutePages extends Controller
{
    public function showmain(){
        return view('main');
    }
    
    public function showmainpage(){
        return view('page.Company', ['data'=>PostOruulah::all()]);
    }

    public function phoenixsheater(Request $request){
        return view('page.PhoenixSheater');
    }

    public function company(Request $request){
        return view('page.Company');
    }
    
    public function ecological(Request $request){
        return view('page.Ecological');
    }

    public function calculate(Request $request){
        return view('page.Calculate');
    }

    public function advice(Request $request){
         return view('page.Advice');
    }

    public function buypage(Request $request){
        return view('page.BuyPage');
    }

    public function shoppingcart(Request $request){
         return view('page.ShoppingCart');
    }

    public function faq(Request $request){
        return view('page.FAQ');
    }
}