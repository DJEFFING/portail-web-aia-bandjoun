<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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

class userController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
        return view('admin.user.profil',compact('user'));
    }

    public function index()
    {

        //les responsables des poles de recherche
        $listUserRespPole = User::whereHas("poleRecherches")->get();

        // les responsables d'equipes
        $listUserRespEquipe = User::whereHas("equipes")->get();

        //les utilisateur qui font partir des equipe
        $listMenbreEquipeUser = User::whereHas('equipe')->get();

        $listRole = Role::all();
        $listFonction = Fonction::all();
        return view('admin.user.gestion-user.index',compact('listUserRespPole','listUserRespEquipe','listMenbreEquipeUser','listRole','listFonction'));
    }

    public function store(Request $request)
    {

    }

    public function show(User $user)
    {
        return view('admin.user.profil',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // dd($request->description);
        if($request->hasFile('profil_url')){
            $user->update([
                "profil_url"=>$request->file('profil_url')->store('profil','public')
            ]);
        }
        $user->update([
            'name' => $request->name,
            'email'=> $request->email,
            "prenom" => $request->prenom,
            "telephone" => $request->telephone,
            "description" => $request->description,
            "facebook_url" => $request->facebook_url ,
            "linkdin_url" =>$request->linkdin_url,
            "adress"=>$request->adress,
            "instagram_url" => $request->instagram_url,
            "twiter_url" => $request->twiter_url ,
            "web_url" => $request->web_url  ,
        ]);

        return redirect()->back()->with("message","les informations on été mise à jour.");

    }

    public function updateDroit(Request $request,User $user)
    {
        if((UserRole::where("user_id",$user->id)
            ->where("role_id",$request->role_id)->exists()
        )){
            $user->update([
                    "fonction_id" => $request->fonction_id
            ]);

        }else{
            UserRole::where("user_id",$user->id)->delete();

            $user->update([
                    "fonction_id" => $request->fonction_id
            ]);

            if(Auth::user()->id != $user->id){
                UserRole::create([
                    "user_id" => $user->id,
                    "role_id" => $request->role_id
                ]);
            }


        }


        return redirect()->back()->with('message','La fonction a été changée avec succès !!');
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
        // Récupérer les IDs des responsables de pôle et d'équipe
        $listRespPole = PoleRecherche::pluck('user_id')->toArray();

        $listRespEquipe = Equipe::pluck('user_id')->toArray();

        // Récupérer les IDs des utilisateurs qui sont membres d'une équipe
        $listEquipeUser = User::whereHas('equipe')->toArray();

        // Combiner toutes les IDs dans un seul tableau pour vérifier l'exclusion
        $excludedUserIds = array_merge($listRespPole, $listRespEquipe, $listEquipeUser);

        // Récupérer les utilisateurs qui ne sont dans aucune des listes
        $listMembre = User::whereNotIn('id', $excludedUserIds)->get();

        return $listMembre;
    }




}
