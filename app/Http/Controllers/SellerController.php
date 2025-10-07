<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = User::where('role', 'seller')->get();
        return view('sellers.index', compact('sellers'));
    }

    public function show(User $seller) {
        return view('sellers.show', compact('seller'));
    }
    public function create()
    {

        return view('sellers.create', compact(''));

    }
    public function store(){

    }
    public function edit(User $seller)
    {
        return view('sellers.edit', compact('seller'));

    }
    public function update(Request $request, User $seller)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $seller->name = $request->name;
        $seller->email = $request->email;

        if (!empty($request->password)) {
            $seller->password = Hash::make($request->password);
        }

        $seller->save();
        return redirect()->route('sellers.index')->with('sucess', 'client modifier');


    }
    public function delete()
    {

    }
    public function destroy()
    {

    }
}
