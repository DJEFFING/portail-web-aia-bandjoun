<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleEquipeProjet extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "description"
    ];

    public function equipes()
    {
        return $this->belongsToMany(Equipe::class, 'equipe_projets')
        ->withPivot("projet_id","equipe_id","role_equipe_projet_id");
    }
}
