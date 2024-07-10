<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Equipe;
use App\Models\PoleRecherche;
use App\Models\User;
use Illuminate\Http\Request;

class PoleRechercheController extends Controller
{
    public function index()
    {
        $listPoles = PoleRecherche::with('user')->latest()->get();
        return view('admin.pole_recherche.index', compact('listPoles'));
    }

    public function create()
    {
        $userList  = $this->getUser();
        return view('admin.pole_recherche.store', compact('userList'));
    }

    public function edit(PoleRecherche $poleRecherche)
    {

        $userList  = User::latest()->get();
        return view('admin.pole_recherche.update', compact('poleRecherche', 'userList'));
    }

    public function show(PoleRecherche $poleRecherche)
    {

        return view('admin.pole_recherche.show', compact('poleRecherche'));
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                "user_id" => 'required|unique:pole_recherches'
            ],
            [
                'user_id.required' => 'le responsable du pôle est obligatoire',
                'user_id.unique' => "Le membre sélectionné est déjà responsable d'un pôle de recherche."
            ]
        );
        // dd($request);
        // $media = "http://127.0.0.1:8000/asset_web/assets/img/projects/repairs-1.jpg";
        // $media = $request->store->media_url->public('pole_recherhe');

        if ($request->hasFile('media_url')) {

            $originalName = $request->file('media_url')->getClientOriginalName();

            // pour sauvegader les fichiers en fonction de l'environement
            if (app()->environment(['local'])) {
                $media = $request->file('media_url')->storeAs('pole_recherche', $originalName, 'public');
            } else {
                $media = $request->file('media_url')->storeAs('pole_recherche', $originalName, 's3');
            }



            $newPoleRecherche = [
                'code_pole' => $request->code_pole,
                'titre' => $request->titre,
                'description_1' => $request->description_1,
                'description_2' => $request->description_2,
                'media_url' => $media,
                'user_id' => $request->user_id,
            ];
            PoleRecherche::create($newPoleRecherche);
        }





        return redirect(route('admin.poleRecherche.index'))->with('message', 'Le pôle de recherche a été créé avec succès !!');
    }



    public function update(Request $request, PoleRecherche $poleRecherche)
    {
        // dd($request);
        if ($request->user_id != $poleRecherche->user_id) {
            $request->validate(
                [
                    "user_id" => 'required|unique:pole_recherches'
                ],
                [
                    'user_id.required' => 'le responsable du pôle est obligatoire',
                    'user_id.unique' => "le membre selectionner est déjà reponssable d'un pôle de recherche"
                ]
            );
        }


        $media = $request->media_url;
        if ($request->hasFile('media_url')) {
            $originalName = $request->file('media_url')->getClientOriginalName();

            // pour sauvegader les fichiers en fonction de l'environement
            if (app()->environment(['local'])) {
                $media = $request->file('media_url')->storeAs('pole_recherche', $originalName, 'public');
            } else {
                $media = $request->file('media_url')->storeAs('pole_recherche', $originalName, 's3');
            }
            // dd($media);
            $poleRecherche->update(["media_url" => $media]);
        }
        $poleRecherche->update([
            'code_pole' => $request->code_pole,
            'titre' => $request->titre,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'user_id' => $request->user_id,
        ]);

        return redirect(route('admin.poleRecherche.index'))->with('message', 'Le pôle de recherche a été modifié avec succès !!');
    }

    public function isVisble(PoleRecherche $poleRecherche)
    {

        $poleRecherche->update(["status" => !($poleRecherche->status)]);
        $message = ($poleRecherche->status == true) ? "le pôle est maintenant public" : "le pôle est n'est plus public !!";
        return redirect()->back()->with('message', $message);
    }

    public function delete(PoleRecherche $poleRecherche)
    {
        //suppression des images enregistrer
        $poleRecherche->delete();
        return redirect()->back()->with('message', 'Le pôle a été supprimé avec succès !!');
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
