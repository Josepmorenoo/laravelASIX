<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'position', 'age', 'team', 'country'];



    /**
     * Opcionalment, podries utilitzar $guarded per protegir camps específics.
     * Exemple: Si només vols protegir algun camp sensible.
     */
    // protected $guarded = ['id'];
}
