<?php

namespace App\Http\Controllers;

use App\Models\MainProduct;

class RoutePages extends Controller
{    

    public function test(){
       $arr=MainProduct::all();
       return response()->json(['data'=>array($arr)]);
    }

    public function phoenixsheater(){
        return view('page.PhoenixSheater');
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