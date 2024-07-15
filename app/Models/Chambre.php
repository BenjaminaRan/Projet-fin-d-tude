<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $fillable = ['Nom', 'Ocupation', 'occupation_time','duree_restante',];

    public function malade()
    {
        return $this->hasOne(Malade::class, 'chambre_id');
    }
}
