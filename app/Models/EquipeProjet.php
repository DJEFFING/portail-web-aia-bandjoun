<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipeProjet extends Model
{
    use HasFactory;
    protected $fillable = [
        "projet_id",
        "equipe_id",
        "role_equipe_projet_id"
    ];
}
