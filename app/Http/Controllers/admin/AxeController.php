<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Axe;
use App\Models\AxeUser;
use App\Models\Equipe;
use App\Models\PoleRecherche;
use App\Models\User;
use Illuminate\Http\Request;

class AxeController extends Controller
{
    public function index()
    {
        $axes = Axe::latest()->get();
        $equipes = Equipe::latest()->get();;

        return view('admin.gestion-axe.index', compact('axes', 'equipes'));
    }

    public function create()
    {

        $equipes = Equipe::all();
        $listUsers = $this->getUser();

        return view('admin.gestion-axe.create', compact('listUsers', 'equipes'));
    }

    public function store(Request $request)
    {
        // dd($request);

        //
        if ($request->hasFile('media_url')) {

            $originalName = $request->file('media_url')->getClientOriginalName();

            // pour sauvegader les fichiers en fonction de l'environement
            if (app()->environment(['local'])) {
                $media = $request->file('media_url')->storeAs('axes', $originalName, 'public');
            } else {
                $media = $request->file('media_url')->storeAs('axes', $originalName, 's3');
            }



            Axe::create(
                [
                    "code_axe" => $request->code_axe,
                    "titre" => $request->titre,
                    "description_1" => $request->description_1,
                    "description_2" => $request->description_2,
                    "media_url" => $media,
                    "user_id" => $request->user_id,
                    "equipe_id" => $request->equipe_id,
                ]
            );
        } else {
            dd($request);
        }

        return redirect(route('admin.axe.index'))->with('message', "l'axe de recherche à été crée avec succès !!");
    }

    public function show(Axe $axe)
    {

        $listUsers = $this->getUser();
        return view('admin.gestion-axe.show', compact('axe', 'listUsers',));
    }

     public function addMembre(Request $request, Axe  $axe)
    {
        // dd($request);
        AxeUser::create([
            "user_id" => $request->user_id,
            "axe_id" => $axe->id,
        ]);
        return redirect()->back()->with('message',"le membre à été ajouter avec succès !!");
    }


    


    public function edit(Axe $axe)
    {


        $userList = $this->getUser();
        $userList [] = $axe->user;
        return view('admin.gestion-axe.update', compact('axe', 'userList'));
    }

    public function update(Request $request, Axe $axe)
    {
        if ($request->hasFile('media_url')) {
            $originalName = $request->file('media_url')->getClientOriginalName();

            // pour sauvegader les fichiers en fonction de l'environement
            if (app()->environment(['local'])) {
                $media = $request->file('media_url')->storeAs('axes', $originalName, 'public');
            } else {
                $media = $request->file('media_url')->storeAs('axes', $originalName, 's3');
            }

            $axe->update(["media_url" => $media]);
        }

        $axe->update([
            "code_axe" => $request->code_axe,
            "titre" => $request->titre,
            "description_1" => $request->description_1,
            "description_2" => $request->description_2,
            "user_id" => $request->user_id,
        ]);

        return redirect(route('admin.axe.index'))->with('message', "l'axe de recherche à été mise à jour avec succès !!");
    }

    public function isVisble(Axe $axe)
    {

        $axe->update(["status" => !($axe->status)]);
        $message = ($axe->status == true) ? "l'axe est maintenant public" : "l'axe est n'est plus public !!";
        return redirect()->back()->with('message', $message);
    }

    public function delete(Axe $axe)
    {
        $axe->delete();
        return redirect()->back()->with('message', "l'axe de recherche à été supprimer avec succès !!");
    }

   
    public function getUser()
    {
        // Récupérer les IDs des responsables de pôle, d'équipe et des axes de recherhe
        $listRespPole = PoleRecherche::pluck('user_id')->toArray();
        $listRespEquipes = Equipe::pluck('user_id')->toArray();
        $listRespAxe = Axe::pluck('user_id')->toArray();

        // Récupérer les IDs des utilisateurs qui sont membres d'une équipe
        $listEquipeUser = User::whereHas('equipe')->pluck('id')->toArray();

        // Récupérer les IDs des utilisateurs qui sont membres d'un axe de recherche
        $listAxeUser = User::whereHas('axe')->pluck('id')->toArray();

        // Combiner toutes les IDs dans un seul tableau pour vérifier l'exclusion
        $excludedUserIds = array_merge($listRespEquipes, $listRespAxe, $listEquipeUser,$listAxeUser, $listRespPole);

        // Récupérer les utilisateurs qui ne sont dans aucune des listes
        $listMembre = User::whereNotIn('id', $excludedUserIds)->get();

        return $listMembre;
    }
}
