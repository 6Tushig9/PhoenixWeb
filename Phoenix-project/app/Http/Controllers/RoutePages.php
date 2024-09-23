<?php

namespace App\Http\Controllers;

use App\Models\MainProduct;

class RoutePages extends Controller
{    

    public function test(){
       $arr=MainProduct::all()[0];
       return response()->json($arr);
    }

    public function phoenixsheater(){
        $arr=MainProduct::all()[0];
        return view('page.PhoenixSheater',['first_item'=>$arr]);
    }

    public function company(){
        return view('page.Company');
    }
    
    public function ecological(){
        return view('page.Ecological');
    }

    public function calculate(){
        return view('page.Calculate');
    }

    public function advice(){
         return view('page.Advice');
    }

    public function buypage(){
        return view('page.BuyPage');
    }

    public function shoppingcart(){
         return view('page.ShoppingCart');
    }

    public function faq(){
        return view('page.FAQ');
    }
}