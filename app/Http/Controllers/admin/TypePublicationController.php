<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TypePublication;
use Illuminate\Http\Request;

class TypePublicationController extends Controller
{
    public function index()
    {
        $typePublications = TypePublication::all();
        return view('admin.gestion-publications.type-publication.index',compact('typePublications'));
    }

    public function store(Request $request)
    {
        TypePublication::create([
            "nom" => $request->nom,
            "description" => $request->description
        ]);

        return redirect()->back()->with('message',"type de publication crée avec succès.");
    }


    public function update(Request $request, TypePublication $typePublication)
    {
        $typePublication->update([
            "nom" => $request->nom,
            "description" => $request->description
        ]);
        return redirect()->back()->with('message',"type de publication modifié avec succès.");
    }

    public function delete(TypePublication $typePublication)
    {
        $typePublication->delete();
        return redirect()->back()->with('message',"type de publication supprimée avec succès.");
    }

}
