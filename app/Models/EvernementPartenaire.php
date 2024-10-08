<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvernementPartenaire extends Model
{
    use HasFactory;
    protected $fillable =[
        "evernement_id",
        "partenaire_id",
        "status"
    ];
}
