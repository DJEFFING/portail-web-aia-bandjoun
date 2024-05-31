<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\PartParser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        "titre",
        "description_1",
        "description_2",
        "date_debut",
        "date_fin",
        "media_url",
        "user_id",
        "pole_recherche_id",
        "status"
    ];

    public function equipes()
    {
        return $this->belongsToMany(Equipe::class, 'equipe_projets')
        ->withPivot("projet_id","equipe_id","role_equipe_projet_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function poleRecherche()
    {
        return $this->belongsTo(PoleRecherche::class);
    }

    public function partenaires()
    {
        return $this->belongsToMany(Partenaire::class,'projet_partenaires');
    }


}
