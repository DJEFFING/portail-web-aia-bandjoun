<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Publication extends Model
{
    use HasFactory;
    protected $guarded = ["_token"];

    public function typePublication()
    {
        return $this->belongsTo(TypePublication::class);
    }

    public function annees()
    {
        return $this->belongsTo(AnneePublication::class);
    }

    public function anneePublication()
    {
        return $this->belongsTo(AnneePublication::class);
    }

    // la liste des auteurs (users) d'une publication
    public function users()
    {
        return $this->BelongsToMany(User::class, 'publication_membres','publication_id', 'user_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function commentaires()
    {
        return $this->hasMany(CommentairePublication::class);
    }
}
