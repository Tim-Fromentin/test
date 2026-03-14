<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
    /**
     * Store a new seller.
     *
     * This endpoint validates the seller's information, creates a new user account
     * in the database, and redirects to the sellers index with a success message.
     * * @group User Management
     * @authenticated
     * * @bodyParam name string required The full name of the seller. Example: John Doe
     * @bodyParam email string required The unique email address. Example: john.doe@example.com
     * @bodyParam password string required The password (minimum 18 characters). Example: VeryStrongPassword123!
     * @bodyParam password_confirmation string required Must match the password field. Example: VeryStrongPassword123!
     * * @response 302 {
     * "message": "Redirecting to /sellers",
     * "session": { "success": "Vendeur créé" }
     * }
     * * @response 422 {
     * "message": "The email has already been taken.",
     * "errors": { "email": ["Cet email est déjà utilisé."] }
     * }
     */
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
        try {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()
                ->route('sellers.index')
                ->with('success', 'Vendeur créé');

        } catch (\Exception $e) {
            dd($e->getMessage());
            Log::error('Erreur création utilisateur : ' . $e->getMessage());

            return redirect()
                ->route('sellers.create')
                ->with('error', 'Une erreur est survenue, veuillez réessayer.');
        }
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
