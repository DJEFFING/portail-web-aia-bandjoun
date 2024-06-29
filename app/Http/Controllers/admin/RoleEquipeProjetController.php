<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoleEquipeProjet;
use Illuminate\Http\Request;

class RoleEquipeProjetController extends Controller
{
    public function index()
    {

       $listRoleEquipeProjet =  RoleEquipeProjet::latest()->get();
        return view('admin.gestion-projet.role_projets.index',compact('listRoleEquipeProjet'));
    }

    public function store(Request $request)
    {
        // dd($request);
        RoleEquipeProjet::create([
            "nom" => $request->nom,
            "description" => $request->description
        ]);
        return redirect()->back()->with('message',"le role d'equipe à été crée avec succès !!");

    }

    public function update(Request $request,  RoleEquipeProjet $roleEquipeProjet)
    {
        // dd($request);
        $roleEquipeProjet->update([
            "nom" => $request->nom,
            "description" => $request->description
        ]);

        return redirect()->back()->with('message',"le role d'equipe à été modifier avec succès !!");

    }

    public function delete(RoleEquipeProjet $roleEquipeProjet)
    {
        // dd($roleEquipeProjet);
        $roleEquipeProjet->delete();
        return redirect()->back()->with('message',"le role d'equipe à été supprimer avec succès !!");
    }
}
