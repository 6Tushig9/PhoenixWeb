<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamtrah;
use App\Models\Sanal;

class CustomerReact extends Controller
{
    public function hamtrah(Request $request){
         if($request->isMethod('post')){
            try{
                Hamtrah::create([
                    'name'=>$request->name,
                    'phone_number'=>$request->phone,
                    'hamtrah_huselt'=>$request->post
                ]);
            } catch(\Exception $e) {
                return response()->json(['status'=>$e->getMessage()]);
            }
        }
        return response()->json(['status'=>'success'],201);
    }

    public function sanal(Request $request){
        if($request->isMethod('post')){
            try{
                Sanal::create([
                    'name'=>$request->name,
                    'phone_number'=>$request->phone,
                    'sanal_huselt'=>$request->post
                ]);
            } catch(\Exception $e) {
                return response()->json(['status'=>$e->getMessage()]);
            }
        }
        return response()->json(['status'=>'success'],201);
    }
}