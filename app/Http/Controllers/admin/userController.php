<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Axe;
use App\Models\Equipe;
use App\Models\Fonction;
use App\Models\PoleRecherche;
use App\Models\Revue;
use App\Models\Role;
use App\Models\RoleEvernement;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
        return view('admin.user.profil', compact('user'));
    }

    public function index()
    {

        //les responsables des poles de recherche
        $listUserRespPole = User::whereHas("poleRecherches")->get();

        // les responsables d'equipes
        $listUserRespEquipe = User::whereHas("equipes")->get();

        //les responsables d'axe de recherche
        $listUserRespAxe = User::whereHas("axes")->get();

        //les utilisateur qui font partir des equipe
        $listMenbreEquipeUser = User::whereHas('equipe')->get();

        //les utilisateur qui font partir des axes de recherches
        $listMenbreAxeUser = User::whereHas('axe')->get();

        // la liste des menmbres qui ne font partir d'aucun pole  et equipe de recherche
        $userListe =  $this->getUser();

        $listRole = Role::all();
        $listFonction = Fonction::all();


        return view(
            'admin.user.gestion-user.index',
            compact(
                'listUserRespPole',
                'listUserRespEquipe',
                'listMenbreEquipeUser',
                'userListe',
                'listRole',
                'listFonction',
                'listUserRespAxe',
                'listMenbreAxeUser'
            )
        );
    }

    public function store(Request $request)
    {
        // dd($request);
        $password = $request->name . "" . $this->generateCode();
        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            "prenom" => $request->prenom,
            "lieu_travail" => $request->lieu_travail,
            "grade" => $request->grade,
            "fonction_id" => $request->fonction_id,

            "telephone" => $request->telephone,
            'password' => $password,
            "description" => "Aucun",
            "sexe" => "M",
        ]);

        UserRole::create([
            "user_id" => $newUser->id,
            "role_id" => $request->role_id
        ]);

        Mail::to($newUser->email)->send(new SendMail($newUser, $password));

        return redirect()->back()->with('message', "Le membre a été ajouté avec succès et ses informations de connexion lui ont été envoyées par mail.");
    }

    public function show(User $user)
    {
        return view('admin.user.profil', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // dd($request->description);
        if ($request->hasFile('profil_url')) {
            $user->update([
                "profil_url" => $request->file('profil_url')->store('profil', 'public')
            ]);
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            "prenom" => $request->prenom,
            "telephone" => $request->telephone,
            "description" => $request->description,
            "facebook_url" => $request->facebook_url,
            "linkdin_url" => $request->linkdin_url,
            "adress" => $request->adress,
            "instagram_url" => $request->instagram_url,
            "twiter_url" => $request->twiter_url,
            "web_url" => $request->web_url,
        ]);

        return redirect()->back()->with("message", "les informations on été mise à jour.");
    }


    public function updateDroit(Request $request, User $user)
    {
        if ((UserRole::where("user_id", $user->id)
            ->where("role_id", $request->role_id)->exists()
        )) {
            $user->update([
                "fonction_id" => $request->fonction_id
            ]);
        } else {


            $user->update([
                "fonction_id" => $request->fonction_id
            ]);



            $userConnect = User::where("id", Auth::user()->id)->get();

            if ((Auth::user()->id != $user->id)) {
                UserRole::where("user_id", $user->id)->delete();
                UserRole::create([
                    "user_id" => $user->id,
                    "role_id" => $request->role_id
                ]);
            }
        }


        return redirect()->back()->with('message', 'La fonction a été changée avec succès !!');
    }

    public function delete(User $user)
    {
    }

    public function changRole()
    {
    }

    public function addRole()
    {
    }

    public function getUser()
    {
        // Récupérer les IDs des responsables de pôle, d'équipe et d'axe de recherche
        $listRespPole = PoleRecherche::pluck('user_id')->toArray();
        $listUserRespAxe = Axe::pluck("user_id")->toArray();
        $listRespEquipe = Equipe::pluck('user_id')->toArray();

        // Récupérer les IDs des utilisateurs qui sont membres d'un axe de recherche
        $listAxeUser = [];
        if ( User::whereHas('axe')->exists() ) {
            $listAxeUser = User::whereHas('axe')->pluck("id")->toArray();
        }

        // Récupérer les IDs des utilisateurs qui sont membres d'une équipe
        $listEquipeUser = [];
        if (User::whereHas('equipe')->exists()) {
            $listEquipeUser = User::whereHas('equipe')->pluck("id")->toArray();
        }


        // Combiner toutes les IDs dans un seul tableau pour vérifier l'exclusion
        $excludedUserIds = array_merge($listRespPole, $listRespEquipe, $listEquipeUser,$listUserRespAxe,$listAxeUser);

        // Récupérer les utilisateurs qui ne sont dans aucune des listes
        $listMembre = User::whereNotIn('id', $excludedUserIds)->get();

        return $listMembre;
    }

    public function generateCode()
    {
        $code = "";
        $carratere = "0123456789";

        do {
            for ($i = 0; $i < 4; $i++) {
                $code .= $carratere[random_int(0, strlen($carratere) - 1)];
            }
        } while (User::where("password", $code)->exists());

        return $code;
    }
}
