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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'model' => 'required|string|max:255|unique:type_categories',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|integer',
            'number' => 'required|integer',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('images', $imageName, 'public');
        }

        // Create TypeCategory associated with the product
        TypeCategory::create([
            'product_id' => $validated['product_id'],
            'model' => $validated['model'],
            'image' => $imageName ?? '',
            'price' => $validated['price'],
            'number' => $validated['number'],
        ]);

        return redirect()->route('product-model.show', ['id' => $validated['product_id']])
            ->with('success', 'TypeCategory added successfully.');
    }
}