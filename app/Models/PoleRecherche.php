<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoleRecherche extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description_1',
        'description_2',
        'media_url',
        "code_pole",
        'user_id',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function equipes(){
        return $this->hasMany(Equipe::class);
    }

    public function revues()
    {
        return $this->hasMany(Revue::class);
    }

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }
}
