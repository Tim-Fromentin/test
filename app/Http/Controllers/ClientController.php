<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        return view('clients.show', compact('client'));
    }
    public function create()
    {

        return view('clients.create');

    }
    public function store(Request $request){
    $request->validate([
        'client_firstName' => 'required',
        'client_lastName' => 'required',
        'client_email' => 'required',
        'client_born_date' => 'required',
        'client_adress' => 'required',
        'client_first_conn' => 'required'

    ]);
    Client::create([
        'client_firstName' => $request->client_firstName,
        'client_lastName' => $request->client_lastName,
        'client_email' => $request->client_email,
        'client_born_date' => $request->client_born_date,
        'client_adress' => $request->client_adress,
        'client_first_conn' => $request->client_first_conn
    ]);
    return redirect()->route('clients.index')->with('sucess', 'Client créé');
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
        $client->client_firstName = $request->client_firstName;
        $client->client_lastName = $request->client_lastName;
        $client->client_email = $request->client_email;
        $client->client_born_date = $request->client_born_date;
        $client->client_adress = $request->client_adress;

        $client->save();
        return redirect()->route('clients.index')->with('success', 'client modifier');
    }
    public function delete()
    {

    }
    public function destroy()
    {

    }
}
