<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProjet extends Model
{
    use HasFactory;
    protected $fillable =[
        "user_id",
        "projet_id",
        "role_projet_id",
        "status"
    ];
}
