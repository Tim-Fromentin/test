<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
//        dd($products);

        return view('products.index', compact('products'));
    }
    public function show(Product $product) {
       // dd($product);
        return view('products.show', compact('product'));
    }
    public function create(ProductCategory $productCategory)
    {
        $categories = ProductCategory::all();
        return view('products.create', compact('categories'));

    }
    public function store(){

    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));

    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function destroy()
    {

    }
}
