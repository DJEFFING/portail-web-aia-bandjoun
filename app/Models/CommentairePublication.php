<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentairePublication extends Model
{
    use HasFactory;
    protected $guarded = ["_token"];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
