<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    // public function signup(Request $request)
    // {
    //     try {
    //         if($request->isMethod('post')){
    //         $request->validate([
    //             'name'=>'required',
    //             'email'=>'required|email',
    //             'password'=>'required',
    //         ]);
    //         User::create([
    //             'name'=>$request->name,
    //             'email'=>$request->email,
    //             'password'=>Hash::make($request->password),
    //         ]);
    //         return redirect('/');
    //     }
    //     } catch(\Exception $error){
    //         return response()->json(['status'=>$error->getMessage()]);
    //     }
    // }
        public function signup(Request $request){
            try {
                if ($request->isMethod('post')) {
                    $request->validate([
                        'name' => 'required|string|max:255',
                        'email' => 'required|email|unique:users,email',
                        'password' => 'required|min:8|confirmed',
                    ]);
                    User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ]);
                    return redirect('/')->with('success', 'Амжилттай бүртгэгдлээ!');
                }
            } catch (\Exception $error) {
                return response()->json(['status' => $error->getMessage()], 500);
            }
        }
    // public function login(Request $request){
    //     try {
    //         if($request->isMethod('post')){
    //         $request->validate([
    //             'email'=>'required',
    //             'password'=>'required'
    //         ]);
    //         if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    //             return redirect('/')->with('success', 'Амжилттай нэвтэрлээ. Та тавтай морилно уу');
    //         }

    //     }
    //     } catch(\Exception $error) {
    //         return response()->json(['status'=>$error->getMessage()]);
    //     }
    //     return response()->json(['status'=>'Bad request']);
    // }
        public function login(Request $request){
            try {
                if ($request->isMethod('post')) {
                    $request->validate([
                        'email' => 'required|email',
                        'password' => 'required',
                    ]);

                    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                        return redirect('/')->with('success', 'Амжилттай нэвтэрлээ. Та тавтай морилно уу.');
                    } else {
                        return back()->withErrors(['login' => 'Е-мэйл эсвэл нууц үг буруу байна.']);
                    }
                }
            } catch (\Exception $error) {
                return response()->json(['status' => $error->getMessage()], 500);
            }

            return response()->json(['status' => 'Bad request'], 400);
        }
    // public function logout(){
    //     Auth::logout();
    //     return redirect('/');
    // }
        public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Амжилттай гарлаа.');
    }
}
