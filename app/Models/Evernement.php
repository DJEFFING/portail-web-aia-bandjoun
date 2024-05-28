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
        "media_url",
    ];
}
