<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AnneePublication;
use App\Models\Document;
use App\Models\Publication;
use App\Models\PublicationMembre;
use App\Models\TypePublication;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        return view('admin.gestion-publications.publication.index', compact('publications', 'typePublications', 'anneePublications', 'anneeActuel'));
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
        return view('admin.gestion-publications.publication.index', compact('publications', 'typePublications', 'anneePublications', 'anneeActuel'));
    }

    public function create()
    {
        $typePublications  = TypePublication::all();
        $anneePublications = AnneePublication::latest()->get();
        $users = User::all();
        return view('admin.gestion-publications.publication.create', compact('typePublications', 'anneePublications', 'users'));
    }


    public function store(Request $request)
    {

        // Commencer une transaction pour garantir l'intégrité des données
        DB::beginTransaction();
        try {
            $media = "";
            if ($request->hasFile("media_url")) {
                $media = $request->file('media_url')->store('publication', 'public');
            }



            $newPublication =  Publication::create([
                "type_publication_id" => $request->type_publication_id,
                "annee_publication_id" => $request->annee_publication_id,
                "titre" => $request->titre,
                "description_1" => $request->description_1,
                "description_2" => $request->description_2,
                "media_url" => ($media != "") ? $media : null,
                "lien_externe" => $request->lien_externe,
            ]);

            //ajouter le document a la publication
            if ($request->hasFile("document_url")) {
                $this->addDocument($request, $newPublication);
            }


            PublicationMembre::create([
                "publication_id" => $newPublication->id,
                "user_id" => Auth::user()->id
            ]);

            // pour ajouter d'autre auteur a la publication
            if (count($request->auteur_id) != 0) {
                for ($i = 0; $i < count($request->auteur_id); $i++) {

                    PublicationMembre::create([
                        "user_id" => $request->auteur_id[$i],
                        "publication_id" => $newPublication->id
                    ]);
                }
            }
            DB::commit();
            return redirect(route('admin.publication.index'))->with("message", "la publication à été crée avec succès.");
        } catch (Exception $e) {
            DB::rollBack();
        }
    }


    public function show(Publication $publication)
    {
        $currentAnnee = AnneePublication::findOrFail($publication->annee_publication_id);
        $listUsers = [];

        // Récupérer les utilisateurs qui ne sont dans aucune des listes
        $listeUtilisateurs = $publication->users()->pluck("id")->toArray();
        $listUsers = User::whereNotIn('id', $listeUtilisateurs)->get();

        return view('admin.gestion-publications.publication.show', compact('publication', 'currentAnnee', 'listUsers'));
    }


    public function edit(Publication $publication)
    {
        $typePublications  = TypePublication::all();
        $anneePublications = AnneePublication::latest()->get();
        $currentAnnee = AnneePublication::findOrFail($publication->annee_publication_id);

        return view('admin.gestion-publications.publication.update', compact('publication', 'typePublications', 'anneePublications', 'currentAnnee'));
    }


    public function update(Request $request, Publication $publication)
    {
        // dd($request);

        $media = "";
        if ($request->hasFile("media_url")) {
            $media = $request->file('media_url')->store('publication', 'public');
            $publication->update(["media_url" => $media]);
        }

        $publication->update([
            "type_publication_id" => $request->type_publication_id,
            "annee_publication_id" => $request->annee_publication_id,
            "titre" => $request->titre,
            "description_1" => $request->description_1,
            "description_2" => $request->description_2,
            "lien_externe" => $request->lien_externe,
        ]);

        return redirect(route('admin.publication.findByAnnee', $request->annee_publication_id))->with("message", "la publication à moidifié crée avec succès.");
    }

    public function isVisible(Publication $publication)
    {
        $publication->update(["status" => !($publication->status)]);
        $message = ($publication->status == true) ? "la publication est maintenant public" : "la publication est n'est plus public !!";
        return redirect()->back()->with('message', $message);
    }


    public function delete(Publication $publication)
    {
        if ($publication->documents()->exists()) {
            foreach ($publication->documents as $document) {

                // Obtenir le chemin du fichier
                $filePath = 'public/' . $document->document_url;
                
                // Supprimer le fichier du stockage
                if (Storage::exists($filePath)) {
                    Storage::delete($filePath);
                }

                // Supprimer l'enregistrement de la base de données
                $document->delete();
            }
        }

        $publication->delete();
        return redirect()->back()->with('message', "la publication à été supprimer avec succès !!");
    }

    public function addAuteur(Request $request, Publication $publication)
    {
        PublicationMembre::create([
            "user_id" => $request->user_id,
            "publication_id" => $publication->id
        ]);

        return redirect()->back()->with("message", "Le membre à été ajoutée");
    }


    public function addDocument(Request $request, Publication $publication)
    {
        // Obtenir le nom original du fichier
        $originalName = $request->file('document_url')->getClientOriginalName();

        // dd($request);
        Document::create([
            "titre" => $originalName,
            "description" => $originalName,
            "document_url" => $request->file('document_url')->storeAs('document_publication', $originalName, 'public'),
            "publication_id" => $publication->id
        ]);

        return ($request->form == 1) ? redirect()->back()->with("message", "le document à éte ajouter.") : $originalName;
    }

    public function file_download(Document $document)
    {

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
