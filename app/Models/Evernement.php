<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evernement extends Model
{
    use HasFactory;

    protected $fillable = [
        "titre",
        "description_1",
        "description_2",
        "date",
        "ville",
        "adress",
        "media_url",
        "status"
    ];

    public function types()
    {
        return $this->belongsToMany(Type::class, 'type_evernements');
    }

    public function membres()
    {
        return $this->belongsToMany(User::class, 'user_evernements')
        ->withPivot("user_id", "evernement_id", "role_evernement_id");
    }

    public function partenaires()
    {
        return $this->belongsToMany(Partenaire::class,'evernement_partenaires');
    }
}
