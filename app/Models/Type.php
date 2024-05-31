<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable =[
        "nom"
    ];

    public function evernements()
    {
        return $this->belongsToMany(Evernement::class, 'type_evernements');
    }
}
