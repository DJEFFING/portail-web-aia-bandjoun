<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\AnneePublication;
use App\Models\Apropos;
use App\Models\Article;
use App\Models\Axe;
use App\Models\Commentaire;
use App\Models\CommentairePublication;
use App\Models\Document;
use App\Models\Equipe;
use App\Models\Evernement;
use App\Models\Fonction;
use App\Models\Partenaire;
use App\Models\PoleRecherche;
use App\Models\Projet;
use App\Models\Publication;
use App\Models\Revue;
use App\Models\Slide;
use App\Models\Type;
use App\Models\User;
use App\Models\RoleEquipeProjet;
use App\Models\RoleEvernement;
use App\Models\TypePublication;
use GuzzleHttp\Psr7\PumpStream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\FuncCall;

class AcceuilController extends Controller
{
    // affichage de la page d'acceuil
    public function acceuil()
    {
        $slide = Slide::all()->first();
        $apropos = Apropos::all()->first();
        $poleRecherches =  PoleRecherche::where("status", true)->take(4)->get();
        $projets = Projet::where("status", true)->take(6)->get();
        $typeEvenement = Type::whereHas("evernements")->get();
        $evenements = Evernement::where("status", true)->get();
        $articles = Article::where("status", true)->latest()->take(3)->get();

       
        $publications = Publication::where("status", true)
        ->where("annee_publication_id",22)
        ->latest()
        ->take(3)
        ->get();
        
        $countSection = [
            "membre" => User::latest()->get()->count(),
            // "membre" => 76,
            "equipe" => Equipe::where("status", true)->get()->count(),
            "projet" => Projet::where("status", true)->count(),
            "publication" => Publication::where("status", true)->count()

        ];

        return view('web.index', compact('slide', 'apropos', 'poleRecherches', 'countSection', 'projets', 'typeEvenement', 'evenements', 'articles', 'publications'));
    }

    // affichage de la page apropos
    public function apropos()
    {
        $apropos = Apropos::all()->first();
        $countSection = [
            "membre" => User::latest()->get()->count(),
            // "membre" => 76,
            "equipe" => Equipe::where("status", true)->get()->count(),
            "projet" => Projet::where("status", true)->count(),
            "publication" => Publication::where("status", true)->count()
        ];
        $poleRecherches =  PoleRecherche::where("status", true)->take(4)->get();
        $equipes = Equipe::where("status", true)->take(4)->get();
        $axes  = Axe::where("status", true)->take(4)->get();
        $axes_total = Axe::all()->count();
        $fonctions = Fonction::all();
        $administrationUser = User::whereHas("equipes")->get();
        $partenaires = Partenaire::where("status", true)->get();

        return view('web.apropos', compact('apropos','axes','axes_total','countSection', 'poleRecherches', 'equipes', 'fonctions', 'administrationUser', 'partenaires'));
    }

    // affchier la liste des évéments
    public function evernement()
    {
        $typeEvenement = Type::whereHas("evernements")->get();
        $evenements = Evernement::where("status", true)->latest()->get();
        return view('web.evernements.evernement-list', compact('typeEvenement', 'evenements'));
    }

    // afficher la liste des poles de recherche
    public function poleRecherche()
    {
        $poleRecherches =  PoleRecherche::where("status", true)->get();
        $equipes = Equipe::where("status", true)->latest()->get();
        return view('web.pole-recherche.pole-recherche-list', compact('poleRecherches', 'equipes'));
    }

    // affcher la liste des équipes
    public function equipes()
    {
        $poleRecherches =  PoleRecherche::whereHas("equipes")->where("status", true)->get();
        $equipes = Equipe::where("status", true)->latest()->get();
        return view('web.equipes.equipe-list', compact('poleRecherches', 'equipes'));
    }

    public function axes()
    {
        $axes = Axe::where("status",true)->get();
        return view('web.axes.axe-list',compact('axes'));
    }

    // affichier la list des projets
    public function projets()
    {
        $poleRecherches = PoleRecherche::whereHas("projets")->where("status", true)->get();
        $projets = Projet::where("status", true)->get();
        return view('web.projet.projet-list', compact('poleRecherches', 'projets'));
    }

    // afficher la liste des blogs
    public function blogs()
    {
        $revues = Revue::all();
        $publications = Publication::where("status", true)->latest()->get();
        $anneePublications = AnneePublication::whereHas("publications")->latest()->get();

        $anneeActuelle = $anneePublications->first();
        $articles = Article::where("status", true)->latest()->get();
        return view('web.blogs.blog-list', compact('revues', 'articles', 'publications', 'anneePublications', 'anneeActuelle'));
    }

    // pour affichier la liste des publicationss
    public function publications()
    {
        $typePublications = TypePublication::latest()->get();
        $typePublicationsAcuelle = $typePublications->first();


        //information pour le formulaire de rechercehe
        $anneePublications = AnneePublication::latest()->get();
        $titrepublications = Publication::all()->pluck("titre");
        $users = User::all();

        // Récupérer les publications pour cette catégorie et les trier par année de manière décroissante
        $publications = Publication::where('type_publication_id', $typePublicationsAcuelle->id)
            ->where('status', true)
            ->with('anneePublication') // Charger les années de publication
            ->get()
            ->sortByDesc(function ($publication) {
                return $publication->anneePublication->annee_publication;
            })
            ->groupBy(function ($publication) {
                return $publication->anneePublication->annee_publication;
            });

        $revues = Revue::all();
        $articles = Article::where("status", true)->latest()->get();
        return view('web.blogs.publication-list', compact('revues', 'articles', 'publications', 'anneePublications', 'typePublications', 'typePublicationsAcuelle', 'titrepublications', 'users'));
    }

    // pour rechercher les publications en fonctions de l'annéé
    public function findByAnnee(AnneePublication $anneePublication)
    {

        $typePublications = TypePublication::whereHas("publications")->latest()->get();
        $anneeActuelle = $anneePublication;

        // Récupérer les publications pour cette année et les trier par catégorie
        $publications = $anneeActuelle->publications()->with("typePublication")->get()->groupBy("typePublication.nom");

        // Obtenir les types de publication pour le filtrage ou pour l'affichage
        $typePublications = TypePublication::all();

        $revues = Revue::all();
        $articles = Article::where("status", true)->latest()->get();

        return view('web.blogs.publication-list', compact('revues', 'articles', 'publications', 'anneePublications', 'anneeActuelle', 'typePublications'));
    }

    // pour rechercher les publications en fonction des catégories
    public function findByCategoryPublication(TypePublication $typePublication)
    {

        // $typePublications = TypePublication::whereHas("publications")->latest()->get();
        $typePublications = TypePublication::latest()->get();
        $typePublicationsAcuelle = $typePublication;


        //information pour le formulaire de rechercehe
        $anneePublications = AnneePublication::latest()->get();
        $titrepublications = Publication::all()->pluck("titre");
        $users = User::all();

       // Récupérer les publications pour cette catégorie et les trier par année de manière décroissante
        $publications = Publication::where('type_publication_id', $typePublicationsAcuelle->id)
            ->where('status', true)
            ->with('anneePublication') // Charger les années de publication
            ->get()
            ->sortByDesc(function ($publication) {
                return $publication->anneePublication->annee_publication;
            })
            ->groupBy(function ($publication) {
                return $publication->anneePublication->annee_publication;
            });

        $revues = Revue::all();
        $articles = Article::where("status", true)->latest()->get();
        return view('web.blogs.publication-list', compact('revues', 'articles', 'publications', 'anneePublications', 'typePublications', 'typePublicationsAcuelle', 'titrepublications', 'users'));
    }

    // pour rechercher les publications en fonction des critères
    public function findByCreteriad(Request $request)
    {
        //information pour le formulaire de rechercehe
        $anneePublications = AnneePublication::latest()->get();
        $titrepublications = Publication::all()->pluck("titre");
        $typePublications = TypePublication::latest()->get();
        $users = User::all();


        // Commencer la requête de base
        $query = Publication::query();

        // Ajouter la condition pour le type de publication si elle est présente
        if ($request->filled('type_id')) {
            $query->where('type_publication_id', $request->type_id);
        }

        // Ajouter la condition pour l'année de publication si elle est présente
        if ($request->filled('annee_id')) {
            $query->where('annee_publication_id', $request->annee_id);
        }

        // Ajouter la condition pour le statut (on suppose que le statut est toujours "true")
        $query->where('status', true);

        // Ajouter la condition pour l'utilisateur si elle est présente
        if ($request->filled('auteur_id')) {
            $query->whereHas('users', function ($query) use ($request) {
                $query->where('id', $request->auteur_id);
            });
        }

        // Ajouter la condition pour le titre si elle est présente
        if ($request->filled('titre')) {
            $query->whereRaw('LOWER(titre) LIKE ?', ['%' . strtolower($request->titre) . '%']);
        }

        // Obtenir les résultats
        $publications = $query->get();

        // Retourner la vue avec les publications trouvées
        return view('web.blogs.result-recherche-publication', compact('publications', 'anneePublications', 'titrepublications', 'typePublications', 'users', 'request'));
    }

    // affichage de la liste des membres
    public function membres()
    {
        //les responsables des Domaine de Recherche
        $listUserRespPole = User::whereHas("poleRecherches")->get();

        // les responsables d'equipes
        $listUserRespEquipe = User::whereHas("equipes")->get();

        //les utilisateur qui font partir des equipe
        $listMenbreEquipeUser = User::whereHas('equipe')->get();

        //les responsable d'axes de recherche
        $listUserRespAxe =  User::whereHas('axes')->get();

        $autreUser = $this->oderUser();

        //les informations pour le formulaire de recherche
        $listNameUser = User::all()->pluck("name");
        $listequipes = Equipe::all();
        $listAxes = Axe::all();
        $listFonction = Fonction::all();

        return view('web.membres.membre-list', compact('listUserRespPole', 'listUserRespEquipe', 'listMenbreEquipeUser', 'autreUser', 'listNameUser', 'listequipes', 'listAxes', 'listFonction', 'listUserRespAxe'));
    }

    // affichage de la page de contact
    public function contact()
    {
        return view('web.contact');
    }

    //recherche des membres en fonction des critères certains critère
    public function findMembreByCreteriad(Request $request)
    {
        // Commencer la requête de base
        $query = Equipe::query();

        $listUser = [];

        //ajouter la conditions pour les responsable d'équipe de recherche
        if ($request->filled('type_id')) {
            $query->where('type_publication_id', $request->type_id);
        }

    }


    public function showPoleRecherche(PoleRecherche $poleRecherche)
    {
        return view('web.pole-recherche.pole-recherche-detail', compact('poleRecherche'));
    }

    public function showEquipe(Equipe $equipe)
    {
        return view('web.equipes.equipe-detail', compact('equipe'));
    }

    public function showAxe(Axe $axe)
    {
        return view('web.axes.axe-detail',compact('axe'));
    }

    public function showProjet(Projet $projet)
    {
        $listRoleEquipeProjet = RoleEquipeProjet::latest()->get();
        return view('web.projet.projet-detail', compact('projet', 'listRoleEquipeProjet'));
    }

    public function showEvernement(Evernement $evernement)
    {
        $roleEvernement = RoleEvernement::all();
        return view('web.evernements.evernement-detail', compact('evernement', 'roleEvernement'));
    }

    public function showArticle(Article $article)
    {
        return view('web.blogs.blog-detail', compact('article'));
    }

    public function showPublication(Publication $publication)
    {
        $annee = AnneePublication::findOrFail($publication->annee_publication_id);
        $publicationSimilaire = Publication::where('type_publication_id',$publication->type_publication_id)
        ->where('annee_publication_id',$publication->annee_publication_id)
        ->take(3)
        ->get();

        return view('web.blogs.publication-detail', compact('publication', 'annee','publicationSimilaire'));
    }

    public function createCommentaire(Request $request, Article $article)
    {

        Commentaire::create([
            "nom" => $request->nom,
            "email" => $request->email,
            "site_web" => $request->site_web,
            "text" => $request->text,
            "article_id" => $article->id,
        ]);

        return redirect()->back()->with('message', "votre commentaire à été bien reçu.");
    }

    public function createCommentairePublication(Request $request, Publication $publication)
    {

        CommentairePublication::create([
            "nom" => $request->nom,
            "email" => $request->email,
            "site_web" => $request->site_web,
            "text" => $request->text,
            "publication_id" => $publication->id,
        ]);

        return redirect()->back()->with('message', "votre commentaire à été bien reçu.");
    }

    public function showProfil(User $user)
    {
        $typeEvenement = Type::whereHas("evernements")->get();
        $publications = $user->publications()->where("status", true)

            ->with('anneePublication') // Charger les années de publication
            ->get()
            ->groupBy('anneePublication.annee_publication'); // Grouper par année

        return view('web.membres.membre-detail', compact('user', 'typeEvenement', 'publications'));
    }

    public function oderUser()
    {
        // Récupérer les IDs des responsables de pôle, d'équipe et d'axe de recherche
        $listRespPole = PoleRecherche::pluck('user_id')->toArray();
        $listRespEquipe = Equipe::pluck('user_id')->toArray();
        $lisRespAxe = Axe::pluck("user_id")->toArray();


        // Récupérer les IDs des utilisateurs qui sont membres d'une équipe
        $listEquipeUser = User::whereHas('equipe')->pluck('id')->toArray();

        // Combiner toutes les IDs dans un seul tableau pour vérifier l'exclusion
        $excludedUserIds = array_merge($listRespPole, $listRespEquipe, $listEquipeUser, $lisRespAxe);

        // Récupérer les utilisateurs qui ne sont dans aucune des listes
        $listMembre = User::whereNotIn('id', $excludedUserIds)->get();

        return $listMembre;
    }

    public function file_download(Document $document)
    {

        // Chemin du fichier dans le disque public
        $filePath = $document->document_url;

        // Vérifier si le fichier existe
        if (app()->environment(['local'])) {
            if (!Storage::disk('public')->exists($filePath)) {
                return abort(404, 'Fichier non trouvé.');
            }
        }else{
            if (!Storage::disk('s3')->exists($filePath)) {
                return abort(404, 'Fichier non trouvé.');
            }
        }


        // Télécharger le fichier
        return (app()->environment(['local'])) ? Storage::disk('public')->download($filePath) : Storage::disk('s3')->download($filePath);
    }
}
