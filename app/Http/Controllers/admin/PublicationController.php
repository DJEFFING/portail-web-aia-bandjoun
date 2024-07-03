<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AnneePublication;
use App\Models\Document;
use App\Models\Publication;
use App\Models\PublicationMembre;
use App\Models\TypePublication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{

    public function index()
    {
        $publications = Publication::all();
        $anneePublications = AnneePublication::whereHas("publications")->latest()->get();


        $anneeActuel = $anneePublications[0];
        $typePublications = $anneeActuel->publications()->with('typePublication')->with('typePublication')
                                        ->select('type_publication_id', \DB::raw('count(*) as count'))
                                        ->groupBy('type_publication_id')
                                        ->get();

        return view('admin.gestion-publications.publication.index',compact('publications','typePublications','anneePublications','anneeActuel'));
    }

    public function findByAnnee(AnneePublication $anneePublication)
    {
        $publications = Publication::all();
        $anneePublications = AnneePublication::whereHas("publications")->latest()->get();

        $anneeActuel = $anneePublication;
        $typePublications = $anneeActuel->publications()->with('typePublication')->with('typePublication')
                                        ->select('type_publication_id', \DB::raw('count(*) as count'))
                                        ->groupBy('type_publication_id')
                                        ->get();
        return view('admin.gestion-publications.publication.index',compact('publications','typePublications','anneePublications','anneeActuel'));
    }

    public function create()
    {
        $typePublications  = TypePublication::all();
        $anneePublications = AnneePublication::latest()->get();
        return view('admin.gestion-publications.publication.create',compact('typePublications','anneePublications'));
    }


    public function store(Request $request)
    {

        // dd("")
        $media = "";
        if($request->hasFile("media_url")){
            $media = $request->file('media_url')->store('publication','public');
        }

       $newPublication =  Publication::create([
            "type_publication_id" => $request->type_publication_id,
            "annee_publication_id" => $request->annee_publication_id  ,
            "titre" => $request->titre  ,
            "description_1" => $request->description_1  ,
            "description_2" => $request->description_2  ,
            "media_url" => ($media != "") ? $media : null,
            "lien_externe" => $request->lien_externe,
        ]);


        PublicationMembre::create([
            "publication_id" => $newPublication->id,
            "user_id" => Auth::user()->id
        ]);
        return redirect(route('admin.publication.index'))->with("message","la publication à été crée avec succès.");
    }


    public function show(Publication $publication)
    {
        $currentAnnee = AnneePublication::findOrFail($publication->annee_publication_id);
        $listUsers = [];

        // Récupérer les utilisateurs qui ne sont dans aucune des listes
        $listeUtilisateurs = $publication->users()->pluck("id")->toArray();
        $listUsers = User::whereNotIn('id', $listeUtilisateurs)->get();

        return view('admin.gestion-publications.publication.show',compact('publication','currentAnnee','listUsers'));
    }


    public function edit(Publication $publication)
    {
        $typePublications  = TypePublication::all();
        $anneePublications = AnneePublication::latest()->get();
        $currentAnnee = AnneePublication::findOrFail($publication->annee_publication_id);

        return view('admin.gestion-publications.publication.update',compact('publication','typePublications','anneePublications','currentAnnee'));
    }


    public function update(Request $request, Publication $publication)
    {
        // dd($request);

        $media = "";
        if($request->hasFile("media_url")){
            $media = $request->file('media_url')->store('publication','public');
            $publication->update(["media_url"=>$media]);
        }

        $publication->update([
            "type_publication_id" => $request->type_publication_id,
            "annee_publication_id" => $request->annee_publication_id  ,
            "titre" => $request->titre  ,
            "description_1" => $request->description_1  ,
            "description_2" => $request->description_2  ,
            "lien_externe" => $request->lien_externe,
        ]);

        return redirect(route('admin.publication.findByAnnee',$request->annee_publication_id))->with("message","la publication à moidifié crée avec succès.");

    }

    public function isVisible(Publication $publication)
    {
        $publication->update(["status" => !($publication->status)]);
        $message = ($publication->status == true) ? "la publication est maintenant public" : "la publication est n'est plus public !!";
        return redirect()->back()->with('message', $message);
    }


    public function delete(Publication $publication)
    {
        $publication->delete();
        return redirect()->back()->with('message', "la publication à été supprimer avec succès !!");
    }

    public function addAuteur(Request $request,Publication $publication)
    {
        PublicationMembre::create([
            "user_id" => $request->user_id,
            "publication_id" => $publication->id
        ]);

        return redirect()->back()->with("message", "Le membre à été ajoutée ");
    }


    public function addDocument(Request $request, Publication $publication)
    {
        // dd($request);
        Document::create([
            "titre" => $request->titre,
            "description" => $request->description,
            "document_url" => $request->file("document_url")->store("document_publication","public"),
            "publication_id" => $publication->id
        ]);

        return redirect()->back()->with("message","le document à éte ajouter.");
    }

    public function file_download(Document $document)
    {
         // Chemin du fichier dans le disque public
        //  $filePath = 'uploads/'. $document->document_url;

         // Chemin du fichier dans le disque public
         $filePath = $document->document_url;

         // Vérifier si le fichier existe
         if (!Storage::disk('public')->exists($filePath)) {
             return abort(404, 'Fichier non trouvé.');
         }

         // Télécharger le fichier
         return Storage::disk('public')->download($filePath);
    }
}
