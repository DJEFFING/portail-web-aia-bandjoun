<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PoleRecherche;
use App\Models\Revue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RevueController extends Controller
{
    public function index()
    {
        $listPoles = PoleRecherche::latest()->get();
        $listRevue = Revue::latest()->get();
        return view('admin.blogs.revues.index',compact('listPoles','listRevue'));
    }

    public function store(Request $request)
    {
        // dd($request);
        Revue::create([
            "pole_recherche_id" =>$request->pole_recherche_id,
            "titre" => $request->titre,
            "description" => $request->description,
        ]);
        return Redirect()->back()->with('message','la revue à été crée avec succès!!');
    }

    public function update(Request $request, Revue $revue)
    {
        // dd($request);
        $revue->update([
            "pole_recherche_id" =>$request->pole_recherche_id,
            "titre" => $request->titre,
            "description" => $request->description,
        ]);
        return Redirect()->back()->with('message','la revue à été modifier avec succès!!');
    }

    public function delete(Revue $revue)
    {
        $revue->delete();
        return Redirect()->back()->with('message','la revue à été supprimer avec succès!!');
    }
}
