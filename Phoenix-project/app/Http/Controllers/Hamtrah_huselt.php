<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Hamtrah;

class Hamtrah_huselt extends Controller
{
    public function f1(Request $request){
        Hamtrah::create($request->all());
    }
}
