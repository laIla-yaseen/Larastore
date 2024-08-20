<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::whereNull('deleted_at')->get(); // عرض المنتجات التي لم يتم حذفها فقط
        $deletedProducts = Product::onlyTrashed()->get(); // المنتجات المحذوفة فقط
        
        return view('products.index', compact('products', 'deletedProducts')); // تمرير كلا المتغيرين إلى الـ view
    }
    

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete(); 
        return redirect()->route('products.index');
    }

    public function restore($id)
    {
        $product = Product::withTrashed()->find($id);
        $product->restore(); 
        return redirect()->route('products.index');
    }
}


