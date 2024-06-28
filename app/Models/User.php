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
        "lieu_travail",
        "grade",
        "adress",
        "profil_url",
        "facebook_url",
        "instagram_url",
        "linkdin_url",
        "twiter_url",
        "web_url",
        "fonction_id"

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

    //pour avoir le pôles de recherche dont l'utilisateur est responssable
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

    //pour avoir la liste des roles que l'utilisateur à dans un évènement
    public function roleEquipe(){
        return $this->belongsToMany(RoleEquipe::class, 'equipe_users');
    }

    //pour avoir la liste des roles que l'utilisateur dans les événements
    public function roleEvernements(){
        return $this->belongsToMany(RoleEvernement::class,'user_evernements')
        ->withPivot("user_id", "evernement_id", "role_evernement_id");
    }


    //pour avoir la liste des événement au quels participe l'utilisateur
    public function evernements()
    {
        return $this->belongsToMany(Evernement::class,'user_evernements')
        ->withPivot("user_id", "evernement_id", "role_evernement_id");
    }

    // pour avoir l'axe dont l'utilisateur fait partir
    public function axe()
    {
        return $this->belongsToMany(Axe::class,'axe_users');
    }

    // pour avoir l'axe dont l'utilisateur est responsable
    public function axes()
    {
        return $this->hasMany(Axe::class);
    }

    //pour avoir la list des projets dont l'utilisateur est le responsable
    public function projet()
    {
        return $this->hasMany(Projet::class);
    }

    //pour avoir la liste des articles écrite par un utilisateur
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    //pour avoir les notifications de l'utilisateurs
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function fonction()
    {
        return $this->belongsTo(Fonction::class);
    }

    public function getProjet()
    {
        $projetResp = [];
        $projetPoleResp = [];
        $projetEquipeResp = [];
        $projetEquipe = [];

        //les projet dont l'utilisateur est responsable
        if($this->projet->isNotEmpty()){
            $projetResp = $this->projet->toArray();
        }

        //les projet du pôles de recherche dont l'utilisateur est reponsable
        if($this->poleRecherches->isNotEmpty() && $this->poleRecherches[0]->projets->isNotEmpty()){
            $projetPoleResp = $this->poleRecherches[0]->projets->toArray();
        }


        //le projet de l'equipe dont l'utilisateur est responsable
        if($this->equipes->isNotEmpty() && $this->equipes[0]->projets->isNotEmpty()){
            $projetEquipeResp = $this->equipes[0]->projets->toArray();
        }


        //les projets de l'equipe dont l'utilisateur fait partie
        if($this->equipe->isNotEmpty() && $this->equipe[0]->projets->isNotEmpty()){
            $projetEquipe = $this->equipe[0]->projets->toArray();
        }


        return array_merge($projetResp, $projetPoleResp, $projetEquipeResp, $projetEquipe);
    }

    // public function getProjet(): Collection
    // {
    //     $projetResp = collect();
    //     $projetPoleResp = collect();
    //     $projetEquipeResp = collect();
    //     $projetEquipe = collect();

    //     // Les projets dont l'utilisateur est responsable
    //     if($this->projets->isNotEmpty()){
    //         $projetResp = $this->projets;
    //     }

    //     // Les projets du pôle de recherche dont l'utilisateur est responsable
    //     if($this->poleRecherches->isNotEmpty() && $this->poleRecherches[0]->projets->isNotEmpty()){
    //         $projetPoleResp = $this->poleRecherches[0]->projets;
    //     }

    //     // Les projets de l'équipe dont l'utilisateur est responsable
    //     if($this->equipes->isNotEmpty() && $this->equipes[0]->projets->isNotEmpty()){
    //         $projetEquipeResp = $this->equipes[0]->projets;
    //     }

    //     // Les projets de l'équipe dont l'utilisateur fait partie
    //     if($this->equipe->isNotEmpty() && $this->equipe[0]->projets->isNotEmpty()){
    //         $projetEquipe = $this->equipe[0]->projets;
    //     }

    //     return $projetResp->merge($projetPoleResp)->merge($projetEquipeResp)->merge($projetEquipe);
    // }

}
