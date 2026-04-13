<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class productController extends Controller
{
    public function addProducts()
    {
        $products = Product::all();
        return view('addProducts', compact('products'));
    }
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock
        ]);
        return redirect('/products');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product=Product::findOrFail($id);
        product->update([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock
        ]);
        return redirect('/products');
    }
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();

        return redirect('/products');
    }
}
