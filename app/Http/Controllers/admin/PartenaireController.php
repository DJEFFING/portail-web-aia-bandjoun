<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Fonction;
use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function index()
    {

        $listPartenaires = Partenaire::latest()->get();;
        return view('admin.partenaire.index',compact('listPartenaires'));
    }

    public function store(Request $request)
    {
        // dd($request);
        if($request->hasFile("logo_url")){
            $originalName = $request->file('logo_url')->getClientOriginalName();

            // pour sauvegader les fichiers en fonction de l'environement
            if (app()->environment(['local'])) {
                $media = $request->file('logo_url')->storeAs('partenaire', $originalName, 'public');
            } else {
                $media = $request->file('logo_url')->storeAs('partenaire', $originalName, 's3');
            }

            Partenaire::create([
                "nom" => $request->nom,
                "description" => $request->description,
                "logo_url" => $media,
            ]);
        }
        return redirect()->back()->with('message',"le partenaire à été ajouter avec succès !!");
    }

    public function update(Request $request, Partenaire $partenaire)
    {
        // dd($request);
        if($request->hasFile('logo_url')){
            $originalName = $request->file('logo_url')->getClientOriginalName();

            // pour sauvegader les fichiers en fonction de l'environement
            if (app()->environment(['local'])) {
                $media = $request->file('logo_url')->storeAs('partenaire', $originalName, 'public');
            } else {
                $media = $request->file('logo_url')->storeAs('partenaire', $originalName, 's3');
            }

            $partenaire->update(['logo_url'=>$media]);
        }
        $partenaire->update([
            "nom" => $request->nom,
            "description" => $request->description,
        ]);
        return redirect()->back()->with('message',"le partenaire à été mise à jour avec succès !!");
    }

    public function isVisible(Partenaire $partenaire)
    {
        // dd($partenaire);
        $partenaire->update(["status"=>!($partenaire->status)]);
        $message = ($partenaire->status == true) ? "le partenaire est maintenant public" : "le partenaire est n'est plus public !!";
        return redirect()->back()->with('message', $message);
    }

    public function delete(Partenaire $partenaire)
    {
        $partenaire->delete();
        return redirect()->back()->with('message',"le partenaire à été supprimer avec succès !!");
    }
}
