<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Product;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $countProducts = $products->count();
        $commands = Command::all();
        $countCommands = $commands->count();
        return view('stats.index', compact('countProducts', 'countCommands'));
    }
}
