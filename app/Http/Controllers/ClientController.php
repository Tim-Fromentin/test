<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

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

        return view('clients.create', compact(''));

    }
    public function store(){

    }
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));

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
