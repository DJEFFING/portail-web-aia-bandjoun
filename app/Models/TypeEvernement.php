<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEvernement extends Model
{
    use HasFactory;
    protected $fillable = [
        "evernement_id",
        "type_id",
        "status"
    ];

}
