<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        "adress",
        "email",
        "telephone",
        "twitter_link",
        "facebook_link",
        "instagram_link",
        "linkedin_link",
    ];
}
