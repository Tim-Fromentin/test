<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('products', compact('product'));
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
