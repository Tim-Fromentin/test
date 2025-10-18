<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Command;
use App\Models\CommandLine;
use App\Models\Product;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class CommandController extends Controller
{
    public function index(Client $client)
    {
        $commands = Command::where('client_id', $client['client_id']);

    }

    public function create(Client $client)
    {
        $cart = \session()->get('cart');
        $products = Product::all();
        return view('commands.create', compact('products', 'client', 'cart'));
    }
    public function addCart($id)
    {
        $product = Product::find($id);
        $cart = \session()->get('cart', []);

        $cart[$id] = [
            'name' => $product->product_name
        ];
        \Illuminate\Support\Facades\Session::put('cart', $cart);
        // dd(session()->get('cart'));
         return redirect()->back();
    }
    public function command(Client $client)
    {
        $cart = \session()->get('cart');
        $command = Command::create([
            'command_statut' => '1',
            'client_id' => '1',
            'seller_id' => '1',
            'command_total' => '0',
            'command_final_quantity' => '0',
            'command_adress' => '0',
            'command_state' => 'en cours'
        ]);
        foreach ($cart as $id => $item) {
            $product = Product::find($id);
            CommandLine::create([
            'command_quantity' => '1',
             'command_total_price' => $product->product_price,
             'command_id' => $command->command_id,
             'product_serial_number' => $id
            ]);
        }
        return redirect()->route('clients.index')->with('success', 'Commande créée avec succès !');
    }



}
