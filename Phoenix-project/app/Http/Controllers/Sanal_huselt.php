<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Sanal;

class Sanal_huselt extends Controller
{
    public function f1(Request $request){
        Sanal::create($request->all());
    }
}
