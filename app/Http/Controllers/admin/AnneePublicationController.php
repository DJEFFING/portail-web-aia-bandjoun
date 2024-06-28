<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AnneePublication;
use Illuminate\Http\Request;

class AnneePublicationController extends Controller
{
    public function index()
    {
        $anneePublications = AnneePublication::all();
        return view('admin.gestion-publications.annee-publication.index',compact('anneePublications'));
    }

    public function store(Request $request)
    {
        AnneePublication::create([
            "annee_publication" => $request->annee_publication,
            "description" => $request->description
        ]);

        return redirect()->back()->with("message", "l'année de plublication à été crée avec succès.");
    }

    public function update(Request $request, AnneePublication $anneePublication)
    {
        $anneePublication->update([
            "annee_publication" => $request->annee_publication,
            "description" => $request->description
        ]);
        return redirect()->back()->with("message", "l'année de plublication à été modifié avec succès.");
    }

    public function delete(AnneePublication $anneePublication)
    {
        $anneePublication->delete();
        return redirect()->back()->with("message", "l'année de plublication à été supprimer avec succès.");
    }
}
