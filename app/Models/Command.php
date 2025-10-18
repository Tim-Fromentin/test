<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    public $timestamps = false;

    protected $table = 'commands';
    protected $primaryKey = 'command_id';

    protected $fillable = [
        'command_statut',
        'client_id',
        'seller_id',
        'command_total',
        'command_final_quantity',
        'command_adress',
        'command_state'
    ];
}
