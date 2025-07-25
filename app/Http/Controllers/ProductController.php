<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
//        dd($products);

        return view('products.index', compact('products'));
    }
    public function create()
    {

    }
    public function store(){

    }
    public function edit()
    {

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
