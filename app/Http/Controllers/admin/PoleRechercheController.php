<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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

    public function showStore()
    {
        $userList  = User::latest()->get();
        return view('admin.pole_recherche.store', compact('userList'));
    }

    public function showUpdate(PoleRecherche $poleRecherche)
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
                'user_id.unique' => "le membre selectionner est déjà reponssable d'un pôle de recherche"
            ]
        );
        // dd($request);
        // $media = "http://127.0.0.1:8000/asset_web/assets/img/projects/repairs-1.jpg";
        // $media = $request->store->media_url->public('pole_recherhe');

        $media = $request->file('media_url')->store('public','pole_recherche');

        $newPoleRecherche = [
            'titre' => $request->titre,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'media_url' => $media,
            'user_id' => $request->user_id,
        ];

        PoleRecherche::create($newPoleRecherche);
        return redirect(route('admin.poleRecherche.index'))->with('message', ['le pole de recherche à été crée avec success !!']);
    }



    public function update(Request $request, PoleRecherche $poleRecherche)
    {
        // dd($request);
        if($request->user_id != $poleRecherche->user_id)
        {
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
            $media = $request->file('media_url')->store('public','pole_recherche');
        }
        $poleRecherche->update([
            'titre' => $request->titre,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'media_url' => $media,
            'user_id' => $request->user_id,
        ]);

        return redirect(route('admin.poleRecherche.index'))->with('message', ['le pole de recherche à été modifer avec avec success !!']);
    }

    public function isVisble(PoleRecherche $poleRecherche)
    {

        $poleRecherche->update(["status"=>!($poleRecherche->status)]);
        $message = ($poleRecherche->status == true) ? "le pôle est maintenant public" : "le pôle est n'est plus public !!";
        return redirect()->back()->with('message',$message);
    }

    public function delete(PoleRecherche $poleRecherche)
    {
        //suppression des images enregistrer
        $poleRecherche->delete();
        return redirect()->back()->with('message','le pôle a été supprimé avec success !!');
    }
}
