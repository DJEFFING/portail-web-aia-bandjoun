<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoleEvernement;
use Illuminate\Http\Request;

class RoleEvernementController extends Controller
{
    public function index()
    {
        $listRoleEvernement = RoleEvernement::latest()->get();
        return view('admin.gestion-vernement.role_evernement.index',compact('listRoleEvernement'));
    }

    public function store(Request $request)
    {

        RoleEvernement::create([
            "nom" =>$request->nom,
            "description" => $request->description,
        ]);

        return redirect()->back()->with('message',"le role à été crée avec succès!!");
    }

    public function update(Request $request, RoleEvernement $roleEvernement)
    {
        $roleEvernement->update([
            "nom"=>$request->nom,
            "description" => $request->description
        ]);

        return redirect()->back()->with('message','role à été mise à jour avec succès!!');
    }

    public function delete(RoleEvernement $roleEvernement)
    {
        $roleEvernement->delete();
        return redirect()->back()->with('message',"le role à été supprimer avec succès!!");
    }
}
