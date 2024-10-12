<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function signup(Request $request)
    {
        try {
            if($request->isMethod('post')){
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
            ]);
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
            return redirect()->route('/');
        }
        } catch(\Exception $error){
            return response()->json(['status'=>$error->getMessage()]);
        }
    }
    public function login(Request $request){
        try {
            if($request->isMethod('post')){
            $request->validate([
                'email'=>'required',
                'password'=>'required'
            ]);
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                session_start();
                return redirect('/')->with('success', 'You are successfully logged in.');
            } else {
                return redirect('/')->with('error', 'You are wrong password or email.');
            }

        }
        } catch(\Exception $error) {
            return response()->json(['status'=>$error->getMessage()]);
        }
        return response()->json(['status'=>'Bad request']);
    }
    public function logout(){
        Auth::logout();
    }
}
