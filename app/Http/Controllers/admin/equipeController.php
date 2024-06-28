<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Equipe;
use App\Models\EquipeUser;
use App\Models\PoleRecherche;
use App\Models\RoleEquipe;
use App\Models\User;
use Illuminate\Http\Request;

class equipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::latest()->get();
        $poleRecherches = PoleRecherche::latest()->get();;

        return view('admin.gestion-equipe.equipes.index', compact('equipes', 'poleRecherches'));
    }

    public function store(Request $request)
    {
        // dd($request);

        //
        if ($request->hasFile('media_url')) {
            $media = $request->file('media_url')->store('equipe', 'public');
            Equipe::create(
                [
                    "code_equipe" => $request->code_equipe,
                    "titre" => $request->titre,
                    "description_1" => $request->description_1,
                    "description_2" => $request->description_2,
                    "media_url" => $media,
                    "user_id" => $request->user_id,
                    "pole_recherche_id" => $request->pole_recherche_id,
                ]
            );
        } else {
            dd($request);
        }

        return redirect(route('admin.equipe.index'))->with('message', "l'equipe à été crée avec succès !!");
    }

    public function show(Equipe $equipe)
    {
        $listRoleEquipes = RoleEquipe::all();
        $listUsers = $this->getUser();
        return view('admin.gestion-equipe.equipes.show', compact('equipe', 'listUsers','listRoleEquipes'));
    }

    public function showStore()
    {

        $listPoles = PoleRecherche::all();
        $listUsers = $this->getUser();

        return view('admin.gestion-equipe.equipes.create', compact('listUsers', 'listPoles'));
    }
 

    public function showUpdate(Equipe $equipe)
    {

        $userList = $this->getUser();
        return view('admin.gestion-equipe.equipes.update', compact('equipe', 'userList'));
    }

    public function update(Request $request, Equipe $equipe)
    {
        if ($request->hasFile('media_url')) {
            $media = $request->file('media_url')->store('equipe', 'public');
            $equipe->update(["media_url" => $media]);
        }

        $equipe->update([
            "code_equipe" => $request->code_equipe,
            "titre" => $request->titre,
            "description_1" => $request->description_1,
            "description_2" => $request->description_2,
            "user_id" => $request->user_id,
        ]);

        return redirect(route('admin.equipe.index'))->with('message', "l'equipe à été mise à jour avec succès !!");
    }

    public function isVisble(Equipe $equipe)
    {

        $equipe->update(["status" => !($equipe->status)]);
        $message = ($equipe->status == true) ? "l'Equipe est maintenant public" : "l'Equipe est n'est plus public !!";
        return redirect()->back()->with('message', $message);
    }

    public function delete(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->back()->with('message', "l'equipe à été supprimer avec succès !!");
    }

    public function addMembre(Request $request, Equipe $equipe)
    {
        // dd($request);
        EquipeUser::create([
            "user_id" => $request->user_id,
            "equipe_id" => $equipe->id,
            "role_equipe_id" => $request->role_equipe_id
        ]);
        return redirect()->back()->with('message',"le membre à été ajouter avec succès !!");
    }

    public function getUser()
    {
        // Récupérer les IDs des responsables de pôle et d'équipe
        $listRespPole = PoleRecherche::pluck('user_id')->toArray();
        $listRespEquipe = Equipe::pluck('user_id')->toArray();

        // Récupérer les IDs des utilisateurs qui sont membres d'une équipe
        $listEquipeUser = User::whereHas('equipe')->pluck('id')->toArray();

        // Combiner toutes les IDs dans un seul tableau pour vérifier l'exclusion
        $excludedUserIds = array_merge($listRespPole, $listRespEquipe, $listEquipeUser);

        // Récupérer les utilisateurs qui ne sont dans aucune des listes
        $listMembre = User::whereNotIn('id', $excludedUserIds)->get();

        return $listMembre;
    }
}
