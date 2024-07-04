<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoleEquipe;
use Illuminate\Http\Request;

class RoleEquipeController extends Controller
{
    public function index()
    {
        $roleEquipes = RoleEquipe::latest()->get();
        return view('admin.gestion-equipe.role_equipe.index',compact('roleEquipes'));
    }

    public function store(Request $request)
    {
        RoleEquipe::create([
            "nom" => $request->nom,
            "description" => $request->description
        ]);
        return redirect()->back()->with('message',"le role d'equipe à été crée avec succès !!");

    }

    public function update(Request $request, RoleEquipe $roleEquipe)
    {
        // dd($request);
        $roleEquipe->update([
            "nom" => $request->nom,
            "description" => $request->description
        ]);

        return redirect()->back()->with('message','le role à été mise à jour avec succès !!');
    }

    public function delete(RoleEquipe $roleEquipe)
    {
        $roleEquipe->delete();
        return redirect()->back()->with('message',"le role d'equipe à été supprimmer avec succès !!");

    }
}
