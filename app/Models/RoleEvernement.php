<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleEvernement extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "description",

    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'user_evernements')
        ->withPivot("user_id", "evernement_id", "role_evernement_id");
    }
}
