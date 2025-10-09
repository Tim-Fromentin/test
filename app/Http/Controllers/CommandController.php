<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Command;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function index(Client $client)
    {
        $commands = Command::where('client_id', $client['client_id']);

    }
}
