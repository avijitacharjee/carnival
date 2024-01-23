<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product',compact('products'));
    }

    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->image = 'storage/'.$request->file('image')->store('product', 'public');
        $product->title = $request->title;
        $product->description = $request->description;
        $product->url = $request->url;
        $product->save();
        return back()->with('msg', 'Successfully stored');
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->image = 'storage/'.$request->file('image')->store('product', 'public');
        $product->title = $request->title;
        $product->description = $request->description;
        $product->url = $request->url;
        $product->save();
        return back()->with('msg', 'Successfully stored');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
