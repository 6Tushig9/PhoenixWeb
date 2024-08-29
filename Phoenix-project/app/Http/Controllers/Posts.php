<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Hamtrah_huselt;
use \App\Models\Sanal_huselt;

class Posts extends Controller
{
    public function hamtrah_huselt(Sanal_huselt $model, Request $request){
        if($request->isMethod('post')){
            try{
                $model->name=$request->name;
                $model->phone=$request->phone;
                $model->comment=$request->post;
                $model->save();
            } catch(\Exception $error){
                return response()->json(['status' => $error], 400);
            }
        }
        return response()->json(['status'=>'success'],200);
    }
    public function sanal_huselt(Hamtrah_huselt $model, Request $request){
        if($request->isMethod('post')){
            try{
                $model->name=$request->name;
                $model->phone=$request->phone;
                $model->comment=$request->post;
                $model->save();
            } catch(\Exception $error){
                 return response()->json(['status' => $error], 400);
            }
        }
         return response()->json(['status'=>'success'],200);
    }
}