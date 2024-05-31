<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [
        "titre",
        "description_1",
        "description_2",
        "media_url",
        "user_id",
        "pole_recherche_id",
        "status"
    ];

    public function poleRecherche()
    {
        return $this->belongsTo(PoleRecherche::class);
    }

    public function menbres(){
        return $this->belongsToMany(User::class,'equipe_users');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projets()
    {
        return $this->belongsToMany(Projet::class, 'equipe_projets')
        ->withPivot("projet_id","equipe_id","role_equipe_projet_id");
    }

}
