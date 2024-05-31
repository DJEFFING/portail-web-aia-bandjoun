<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "prenom",
        "telephone",
        "description",
        "sexe",
        "profil_url",
        "facebook_url",
        "instagram_url",
        "twiter_url",
        "web_url",

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //pour avoir le pole de recherche dont l'utilisateur est responssable
    public function poleRecherches()
    {
        return $this->hasMany(PoleRecherche::class);
    }

    // connaitre les roles d'un utilisateur
    public function roles():BelongsToMany {
        return $this->belongsToMany(Role::class);
    }

    //connaitre le role d'un utilisateur
    public function getRole($role){
        return $this->roles()->where("nom",$role)->exists();
    }

    //pour avoir la l'equipe dont l'utilisateur est responsable
    public function equipes()
    {
        return $this->hasMany(Equipe::class);
    }

    //pour avoir l'equipe dont l'utilsateur fait partir
    public function equipe(){
        return $this->belongsToMany(Equipe::class,'equipe_users');
    }

    public function roleEquipe(){
        return $this->belongsToMany(RoleEquipe::class, 'equipe_users');
    }

    public function roleEvernements(){
        return $this->belongsToMany(RoleEvernement::class,'user_evernements')
        ->withPivot("user_id", "evernement_id", "role_evernement_id");
    }


    public function evernements()
    {
        return $this->belongsToMany(Evernement::class,'user_evernements')
        ->withPivot("user_id", "evernement_id", "role_evernement_id");
    }

    public function projet()
    {
        return $this->hasMany(Projet::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}
