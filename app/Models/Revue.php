<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revue extends Model
{
    use HasFactory;
    protected $fillable =[
        "pole_recherche_id",
        "titre",
        "description",
        "status"
    ];

    public function poleRecherche()
    {
        return $this->belongsTo(PoleRecherche::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
