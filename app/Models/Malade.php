<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malade extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Prenom',
        'age',
        'adresse',
        'phone',
        'cas',

    ];
}
