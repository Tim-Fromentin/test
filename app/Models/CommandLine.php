<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommandLine extends Model
{
    protected $table = 'command_lines';
    public $timestamps = false;

    protected $primaryKey = 'command_line_id';
    protected $fillable = [
        'command_quantity',
        'command_total_price',
        'command_id',
        'product_serial_number'
    ];
}
