<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\TypeCategory;

class ProductModel extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json(['id'=>$product]);
    }
}
