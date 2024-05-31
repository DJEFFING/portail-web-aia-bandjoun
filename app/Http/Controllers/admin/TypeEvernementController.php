<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeEvernementController extends Controller
{
    public function index()
    {
        $listTypeEvernements = Type::all();
       return view('admin.gestion-vernement.type_evernement.index',compact('listTypeEvernements'));
    }

    public function store(Request $request)
    {
        // dd($request);
        Type::create([
            "nom" => $request->nom
        ]);

        return redirect()->back()->with('message',"le type d'evernement à été ajouter avec success!!");
    }

    public function update(Request $request,Type $type)
    {
        // dd($request->nom);
        $type->update([
            "nom"=>$request->nom
        ]);
        return redirect()->back()->with('message',"le type à été modifier avec success!!");
    }

    public function delete(Type $type)
    {
        $type->delete();
        return redirect()->back()->with('message',"le type à été supprimer avec success avec success!!");
    }
}
