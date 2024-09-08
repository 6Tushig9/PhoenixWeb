<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Hamtrah_huselt;
use \App\Models\Sanal_huselt;

class Posts extends Controller
{
    public function hamtrah_huselt(Request $request){
        if($request->isMethod('post')){
            try{
                Hamtrah_huselt::create([
                    'name'=>$request->name,
                    'phone'=>$request->phone,
                    'comment'=>$request->post
                ]);
            } catch(\Exception $e) {
                return response()->json(['status'=>$e->getMessage()]);
            }
        }
        return response()->json(['status'=>'success'],201);
    }

    public function sanal_huselt(Request $request){
        if($request->isMethod('post')){
            try{
                Sanal_huselt::create([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'comment'=>$request->post
            ]);
            } catch(\Exception $e) {
                return response()->json(['status'=>$e->getMessage()]);
            }
        }
         return response()->json(['status'=>'success'],201);
    }
}