<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::all();
        return view('sellers.index', compact('sellers'));
    }

    public function show(Seller $seller) {
        return view('sellers.show', compact('seller'));
    }
    public function create()
    {

        return view('sellers.create', compact(''));

    }
    public function store(){

    }
    public function edit(Seller $seller)
    {
        return view('sellers.edit', compact('seller'));

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
