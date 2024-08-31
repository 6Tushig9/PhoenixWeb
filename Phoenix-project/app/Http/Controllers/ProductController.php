<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductFeature;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('feature', 'model')->get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $features = ProductFeature::all();
        $models = ProductModel::all();
        return view('product.create', compact('features', 'models'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'product_feature_id' => 'required|exists:product_features,id',
            'product_model_id' => 'required|exists:product_models,id',
        ]);

        Product::create($request->all());
        return redirect()->route('product.index');
    }
}
