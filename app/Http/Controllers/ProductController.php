<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_desc' => 'required|string',
            'product_price_pre_tax' => 'required|numeric|min:0',
            'product_img' => 'required|string',
            'product_stock' => 'required|integer|min:0',
            'product_country' => 'required|in:France,Espagne',
            'product_weight' => 'required|numeric|min:0',
            'product_categorie_id' => 'required|exists:product_categories,product_categorie_id'
        ]);

        try {
            Product::create($request->all());
            return redirect()
                ->route('products.index')
                ->with('success', 'Le produit a bien été ajouté avec succès.');

        } catch (\Exception $e) {
            Log::error('Erreur lors de la création du produit : ' . $e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'Une erreur est survenue lors de l\'ajout du produit. Veuillez réessayer.');
        }
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));

    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_price_pre_tax' => 'required',
            'product_img' => 'required'
        ]);
        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->product_price_pre_tax = $request->product_price_pre_tax;
        $product->product_img = $request->product_img;

        $product->save();
        return redirect()->route('products.index')->with('success', 'produit modifier');


    }
    public function delete(Product $product)
    {
        return view('products.delete', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'produit supprimer');

    }
}
