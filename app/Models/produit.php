<?php

namespace App\Models;

use App\Models\commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function commande()
    {
        return $this->hasMany(commande::class);
    }
}
