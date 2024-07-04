<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Equipe;
use App\Models\EquipeProjet;
use App\Models\EquipeUser;
use App\Models\Partenaire;
use App\Models\PoleRecherche;
use App\Models\Projet;
use App\Models\ProjetPartenaire;
use App\Models\RoleEquipe;
use App\Models\RoleEquipeProjet;
use App\Models\User;
use App\Models\UserProjet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjetController extends Controller
{
    public  function index()
    {
        $listProjet = Projet::latest()->get();
        return view('admin.gestion-projet.projet.index',compact('listProjet'));
    }


    public function store(Request $request)
    {
        // dd($request);
        Projet::create([
            "titre" => $request->titre,
            "description_1" => $request->description_1,
            "description_2"=> $request->description_2,
            "date_debut" => $request->date_debut,
            "date_fin" => $request->date_fin,
            "media_url" => $request->file('media_url')->store('projets','public'),
            "user_id" => $request->user_id,
            "pole_recherche_id" => $request->pole_recherche_id,
        ]);
        return redirect(route('admin.projet.index'))->with('message','le projet à été crée avec succès!!');
    }

    public function create()
    {

        $listUsers = User::latest()->get();
        $listPoles = PoleRecherche::latest()->get();
        return view('admin.gestion-projet.projet.create',compact('listUsers','listPoles'));
    }

    public function edit(Projet $projet)
    {

        $listUsers = User::latest()->get();
        $listPoles = PoleRecherche::latest()->get();
        return view('admin.gestion-projet.projet.update',compact('projet','listUsers','listPoles'));
    }

    public function show(Projet $projet)
    {
        // dd($projet);
        $listPartenaire = $this->getPartenaire($projet->id);
        $listEquipe = $this->getEquipe($projet);
        $listRoleEquipeProjet = RoleEquipeProjet::latest()->get();
        $listMembres = $this->getUser($projet->id);
        return view('admin.gestion-projet.projet.show',compact('projet','listEquipe','listRoleEquipeProjet','listPartenaire','listMembres'));

    }

    public function update(Request $request,Projet $projet)
    {
        // dd($request);
        if($request->hasFile("media_url")){
            $projet->update([
                "media_url" => $request->file('media_url')->store('projets','public'),
            ]);
        }

        $projet->update([
            "titre" => $request->titre,
            "description_1" => $request->description_1,
            "description_2"=> $request->description_2,
            "date_debut" => $request->date_debut,
            "date_fin" => $request->date_fin,
            "user_id" => $request->user_id,
            "pole_recherche_id" => $request->pole_recherche_id,
        ]);

        return redirect(route('admin.projet.index'))->with('message','le projet à été modifier avec succès!!');

    }

    public function isVisible(Projet $projet)
    {
        // dd($projet);
        $projet->update(["status" => !($projet->status)]);
        $message = ($projet->status == true) ? "le projet est maintenant public" : "le projet est n'est plus public !!";
        return redirect()->back()->with('message', $message);
    }

    public function delete(Projet $projet)
    {
        // dd($projet);
        $projet->delete();
        return redirect()->back()->with('message',"le projet à été supprimer avec succès!!");
    }

    public function addEquipe(Request $request, Projet $projet)
    {
        // dd($request);
        EquipeProjet::create([
            "projet_id" => $projet->id,
            "equipe_id" => $request->equipe_id,
            "role_equipe_projet_id" => $request->role_equipe_projet_id
        ]);
        return redirect()->back()->with('message',"l'equipe à été ajouter au projet avec succès !!");

    }

    public function addMemnbre(Request $request, Projet $projet){

        UserProjet::create([
            "user_id"  => $request->user_id,
            "projet_id"  => $projet->id,
            "role_projet_id" => 1
        ]);
        return redirect()->back()->with('message',"le membre a été ajouter au projet avec succès !!");
    }

    public function addPartenaire(Request $request,Projet $projet)
    {
        // dd($request);
        ProjetPartenaire::create([
            "partenaire_id" =>$request->partenaire_id,
            "projet_id" => $projet->id,
        ]);
        return redirect()->back()->with('message',"la partenaire à été ajouter au projet avec succès!!");
    }

    //récupération de tous les équipes de recherches qui sont dans le meme Domaine de Recherche que le projet
    public function getEquipe($projet)
    {
        $listEquipe = Equipe::where("pole_recherche_id",$projet->pole_recherche_id)->get();
        $listEquipes = [];
        foreach($listEquipe as $equipe)
        {
            if(!(EquipeProjet::where('projet_id',$projet->id)
                ->where('equipe_id',$equipe->id)
                ->exists())
            ){
                $listEquipes [] = $equipe;
            }
        }

        return $listEquipes;
    }

    public function getPartenaire($projet_id)
    {
        $paratenaires = Partenaire::latest()->get();
        $listPartenaire = [];
        foreach($paratenaires as $paratenaire)
        {
            if(!(ProjetPartenaire::where("partenaire_id",$paratenaire->id)
                ->where("projet_id",$projet_id)
                ->exists() )
            )
            {
              $listPartenaire [] = $paratenaire;
            }
        }

        return $listPartenaire;
    }


    public function getUser($projet_id)
    {
        $users = User::all();
        $listUser = [];
        foreach($users as $user){
            if(!( UserProjet::where("user_id",$user->id)
                    ->where("projet_id",$projet_id)
                    ->exists()
                ) ){
                $listUser [] =$user;
            }
        }
        return $listUser;
    }
}

