<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkouts extends Model
{
    protected $fillable =
        [
            'full_name',
            'email',
            'address',
            'city',
            'state',
            'zip',
        ];
}
