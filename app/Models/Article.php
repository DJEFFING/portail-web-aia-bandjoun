<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =[
        "user_id",
        "revue_id",
        "titre",
        "description_1",
        "description_2",
        "media_url",
        "status"
    ];

    public function revue()
    {
        return $this->belongsTo(Revue::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public static function countByMonth($month)
    {
        return self::whereMonth("created_at", $month)
        ->whereYear("created_at",now()->year)
        ->count();
    }
}
