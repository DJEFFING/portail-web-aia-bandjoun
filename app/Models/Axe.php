<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Axe extends Model
{
    use HasFactory;
    protected $fillable = [
        "titre",
        "code_axe",
        "description_1",
        "description_2",
        "media_url",
        "user_id",
        "equipe_id",
        "status"
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function membres()
    {
        return $this->belongsToMany(User::class, "axe_users");
    }
}
