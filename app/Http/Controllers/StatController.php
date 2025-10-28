<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Command;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $countProducts = $products->count();
        $commands = Command::all();
        $countCommands = $commands->count();
        $clients = Client::all();
        $countClients = $clients->count();
        $categories = ProductCategory::all();
        $countCategories = $categories->count();
        return view('stats.index', compact('countProducts', 'countCommands', 'countClients', 'countCategories'));
    }
}
