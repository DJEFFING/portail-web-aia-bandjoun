<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable =[
        "nom",
        "email",
        "site_web",
        "text",
        "article_id",
        "status"
    ];

    public function article()
    {
        $this->belongsTo(article::class);
    }
}
