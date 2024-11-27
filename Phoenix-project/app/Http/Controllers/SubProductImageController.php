<?php

namespace App\Http\Controllers;

use App\Models\SubProductImage;
use Illuminate\Http\Request;

class SubProductImageController extends Controller
{
    public function index()
    {
        $images = SubProductImage::all();
        return view('subProductImages.index', compact('images'));
    }

    public function create()
    {
        return view('subProductImages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return view('subProductImages.show', compact('subProductImage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('subProductImages.edit', compact('subProductImage'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
