<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Command;
use App\Models\CommandLine;
use App\Models\Product;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;
use function Laravel\Prompts\alert;

class CommandController extends Controller
{
    public function index(Client $client)
    {
        $commands = Command::where('client_id', $client['client_id'])->get();

        return view('commands.index', compact('commands', 'client'));
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
        $cart = session()->get('cart', []);


        $quantityInCart = isset($cart[$id]) ? $cart[$id]['quantity'] : 0;


        if ($product->product_stock <= $quantityInCart) {
            return redirect()->back()->with('error', 'Stock insuffisant');
        }


        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id'       => $product->product_serial_number,
                'name'     => $product->product_name,
                'price'    => $product->product_price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produit ajouté au panier');
    }

    public function command(Client $client)
    {

        $cart = \session()->get('cart');
        $command = Command::create([
            'command_statut' => '1',
            'client_id' => $client->client_id,
            'seller_id' => '1',
            'command_total' => '0',
            'command_final_quantity' => '0',
            'command_adress' => '0',
            'command_state' => 'en cours'
        ]);
        foreach ($cart as $id => $item) {
            $product = Product::find($id);
            CommandLine::create([
            'command_quantity' => $item['quantity'],
             'command_total_price' => $product->product_price,
             'command_id' => $command->command_id,
             'product_serial_number' => $id
            ]);
        }
        session()->forget('cart');
        return redirect()->route('clients.index')->with('success', 'Commande créée avec succès !');
    }



    public function edit(Command $command)
    {
        // dd($command);
        return view('commands.edit', compact('command'));
    }

    public function update(Request $request, Command $command)
    {
        $validated = $request->validate([
            'command_adress' => 'required',
            'command_state' => 'required'
        ]);
        $command->update($validated);

        return redirect()->route('clients.index')->with('success', 'commande modifier');
    }
}
