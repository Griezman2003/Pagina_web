<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'nombre',
        'email',
        'password',
    ];

}
