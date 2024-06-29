<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneePublication extends Model
{
    use HasFactory;
    protected $guarded = ["_token"];

    protected $table = "annee_publications";
    
    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
