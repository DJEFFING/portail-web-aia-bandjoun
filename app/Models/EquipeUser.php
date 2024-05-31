<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipeUser extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "equipe_id",
        "role_equipe_id"
    ];
}
