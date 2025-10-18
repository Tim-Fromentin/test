<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'client_firstName',
        'client_lastName',
        'client_email',
        'client_born_date',
        'client_adress',
    ];

    protected $table = 'clients';
    protected $primaryKey = 'client_id';
}
