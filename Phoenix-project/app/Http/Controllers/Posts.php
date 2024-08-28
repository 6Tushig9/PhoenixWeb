<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Hamtrah_huselt;
use \App\Models\Sanal_huselt;

class Posts extends Controller
{
    public function sanal_huselt(Sanal_huselt $model){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
        }
    }
    public function hamtrah_huselt(Hamtrah_huselt $model){

    }
}
