<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\CommandLine;
use App\Models\Product;
use Illuminate\Http\Request;

class CommandeLineController extends Controller
{
    public function show(Command $command, Product $product)
    {
        $lines = CommandLine::where('command_id', $command->command_id)->with('product')->get();
        return view('commmandLine.show', compact('lines'));
    }
}
