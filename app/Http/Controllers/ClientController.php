<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Testing\Fluent\Concerns\Has;
use function Laravel\Prompts\password;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function show(Client $client) {
        $commands = Command::where('client_id', $client->client_id)->get();
        return view('clients.show', compact('client', 'commands'));
    }
    public function create()
    {

        return view('clients.create');

    }
    public function store(Request $request){
        $request->validate([
            'client_firstName' => ['required','string','max:100'],
            'client_lastName' => ['required','string','max:100'],
            'client_email' => ['required','string','email','max:255','unique:clients,client_email'],
            'client_born_date' => ['required','date','before:today'],
            'client_adress' => ['required','string','max:255'],
        ],[
            'client_firstName.required' => 'Le prénom est obligatoire.',
            'client_firstName.string' => 'Le prénom doit être une chaîne de caractères.',
            'client_firstName.max' => 'Le prénom ne doit pas dépasser 100 caractères.',

            'client_lastName.required' => 'Le nom est obligatoire.',
            'client_lastName.string' => 'Le nom doit être une chaîne de caractères.',
            'client_lastName.max' => 'Le nom ne doit pas dépasser 100 caractères.',

            'client_email.required' => 'L’email est obligatoire.',
            'client_email.email' => 'L’email doit être une adresse valide.',
            'client_email.max' => 'L’email ne doit pas dépasser 255 caractères.',
            'client_email.unique' => 'Cet email est déjà utilisé.',

            'client_born_date.required' => 'La date de naissance est obligatoire.',
            'client_born_date.date' => 'La date de naissance doit être une date valide.',
            'client_born_date.before' => 'La date de naissance doit être dans le passé.',

            'client_adress.required' => 'L’adresse est obligatoire.',
            'client_adress.string' => 'L’adresse doit être une chaîne de caractères.',
            'client_adress.max' => 'L’adresse ne doit pas dépasser 255 caractères.',
        ]);
    Client::create([
        'client_firstName' => $request->client_firstName,
        'client_lastName' => $request->client_lastName,
        'client_email' => $request->client_email,
        'client_born_date' => $request->client_born_date,
        'client_adress' => $request->client_adress,
        'client_first_conn' => 1
    ]);
    return redirect()->route('clients.index')->with('success', 'Client créé');
    }
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));

    }
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'client_firstName' => 'required|string|max:255',
            'client_lastName' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_born_date' => 'nullable|date',
            'client_adress' => 'nullable|string|max:255',
        ]);
        $client->update($validated);

        return redirect()->route('clients.index')->with('success', 'client modifier');
    }
    public function delete(Client $client)
    {
        return view('clients.delete', compact('client'));
    }
    public function destroy(Request $request, Client $client)
    {
        try {
            $client->update([
                'client_firstName' => 'CLIENT DELETE',
                'client_lastName' => 'CLIENT DELETE',
                'client_email' => 'CLIENT_DELETE_' . date('Y-m-d_H-i-s') . '@example.com',
                'client_adress' => 'CLIENT DELETE',
            ]);
            return redirect()
                ->route('clients.index')
                ->with('success', 'Le client a bien été anonymisé et désactivé.');

        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'anonymisation du client ID ' . $client->id . ' : ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la suppression du client.');
        }
    }
}
