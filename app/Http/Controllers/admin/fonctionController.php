<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Fonction;
use Illuminate\Http\Request;

class fonctionController extends Controller
{
    public function index()
    {
        $fonctions = Fonction::latest()->get();;
        return view('admin.fonction.index',compact('fonctions'));
    }

    public function store(Request $request)
    {
        Fonction::create([
            "nom" =>$request->nom,
            "description" => $request->description
        ]);
        return redirect()->back()->with('message','la fonction a été crée avec success !!');
    }

    public function update(Request $request, Fonction $fonction)
    {
        // dd($request);
        $fonction->update([
                "nom"=>$request->nom,
                "description"=>$request->description
        ]);

        return redirect()->back()->with('message',"la fonction a été modifier avec success !!");
    }

    public function delete(Fonction $fonction)
    {
        $fonction->delete();
        return redirect()->back()->with('message','la fonction a été supprimer avec success !!');
    }
}
