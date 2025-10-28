<?php

namespace App\Http\Controllers;


use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
    return view('categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_categorie_name' => 'required',
            'product_type_sell' => 'required'
        ]);

        ProductCategory::create($request->all());
        return redirect()->route('categories.index')->with('success', 'catégorie ajouter');
    }

    public function delete(ProductCategory $productCategory)
    {
        return view('categories.delete', compact('productCategory'));
    }
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return redirect()->route('categories.index')->with('success', 'Catégorie supprimer');
    }

    public function edit(ProductCategory $productCategory)
    {
        return view('categories.edit', compact('productCategory'));
    }
    public function update(Request $request, ProductCategory $productCategory)
    {
        $request->validate([
            'product_categorie_name' => 'required',
            'product_type_sell' => 'required'
        ]);
        $productCategory->product_categorie_name = $request->product_categorie_name;
        $productCategory->product_type_sell = $request->product_type_sell;

        $productCategory->save();
        return redirect()->route('categories.index')->with('success', 'Catégorie modifier');
    }
}
