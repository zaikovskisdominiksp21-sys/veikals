<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    // READ - visu produktu saraksts
    public function index()
    {
        $products = Product::with('category')->latest()->get();

        return view('products.index', compact('products'));
    }

    // CREATE - forma
    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    // CREATE - saglabāšana
    public function store(ProductRequest $request)
    {
        Product::create($request->validated());

        return redirect()->route('products.index')->with('status', 'Produkts pievienots!');
    }

    // READ - viens produkts
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // UPDATE - forma
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    // UPDATE - saglabāšana
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.index')->with('status', 'Produkts atjaunināts!');
    }

    // DELETE - dzēšana ar AJAX (atgriež JSON)
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(['success' => true]);
    }
}
