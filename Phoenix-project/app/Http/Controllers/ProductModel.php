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

    public function subcategory($id){
        $product = Product::findOrFail($id);
        return view('page.UploadCategoryProducts', compact('product'));
    }

    public function store(Request $request, TypeCategory $category)
    {
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('images', $imageName, 'public');
        }
        $product = Product::findOrFail($request->product_id);
        $product->typecategory()->create([
            'model' => $request->model,
            'image' => $request->image,
            'price' => $request->price,
            'number' => $request->number,
        ]);


        return redirect()->route('product-model.show', ['id' => $request->product_id])->with('success', 'TypeCategory added successfully.');
    }
}