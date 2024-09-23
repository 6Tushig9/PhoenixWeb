<?php

namespace App\Http\Controllers;

use App\Models\MainProduct;
use App\Models\Advice;
use Illuminate\View\View;

class RoutePages extends Controller
{   

    public function test(){
       $arr=MainProduct::all()[0] ?? null;
       $test=Advice::all() ?? null;
       return response()->json($test);
    }

    public function phoenixsheater(): View
    {
        $arr=MainProduct::all()[0] ?? null;
        $array=array(MainProduct::all()) ?? null;
        $menu=[];
        for ($i = 1; $i < count($array); $i++) {
            array_push($menu, $array[$i]);
        }
            
        return View('page.PhoenixSheater',['first_item'=>$arr, 'menu'=>$menu]);
    }

    public function company(): View
    {
        return View('page.Company');
    }
    
    public function ecological(): View
    {
        return View('page.Ecological');
    }

    public function calculate(): View
    {
        return View('page.Calculate');
    }

    public function advice(): View
    {
        $data=Advice::all() ?? null;
        return View('page.Advice',['advice'=>$data]);
    }

    public function buypage(): View
    {
        return View('page.BuyPage');
    }

    public function bpage($id): View
    {
        return View('page.BuyPage');
    }

    public function shoppingcart(): View
    {
         return View('page.ShoppingCart');
    }

    public function faq(): View
    {
        return View('page.FAQ');
    }
}