<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        return view('sellers.create');

    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:18'],
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L’email est obligatoire.',
            'email.email' => 'L’email doit être une adresse valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('sellers.index')->with('success', 'Vendeur créé');
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
        return redirect()->route('sellers.index')->with('success', 'client modifier');


    }
    public function delete()
    {

    }
    public function destroy()
    {

    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Vous êtes déconnecté.');
    }
}
