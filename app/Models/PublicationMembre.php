<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationMembre extends Model
{
    use HasFactory;
    protected $guarded = ["_token"];
}
