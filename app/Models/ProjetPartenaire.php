<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetPartenaire extends Model
{
    use HasFactory;
    protected $fillable =[
        "partenaire_id",
        "projet_id",
    ];
}
