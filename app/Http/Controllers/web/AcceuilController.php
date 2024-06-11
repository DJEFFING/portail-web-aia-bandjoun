<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Article;
use App\Models\Commentaire;
use App\Models\Equipe;
use App\Models\Evernement;
use App\Models\Fonction;
use App\Models\Partenaire;
use App\Models\PoleRecherche;
use App\Models\Projet;
use App\Models\Revue;
use App\Models\Slide;
use App\Models\Type;
use App\Models\User;
use App\Models\RoleEquipeProjet;
use App\Models\RoleEvernement;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AcceuilController extends Controller
{
    public function acceuil()
    {
        $slide = Slide::all()->first();
        $apropos = Apropos::all()->first();
        $poleRecherches =  PoleRecherche::where("status",true)->take(4)->get();
        $projets = Projet::where("status",true)->take(6)->get();
        $typeEvenement = Type::whereHas("evernements")->get();
        $evenements = Evernement::where("status",true)->get();
        $articles = Article::where("status",true)->latest()->take(3)->get();
        $countSection = [
            "membre" => User::latest()->get()->count(),
            // "membre" => 76,
            "equipe" => Equipe::where("status",true)->get()->count(),
            "projet" => Projet::where("status",true)->count(),
            "article" => Article::where("status",true)->count()
        ];

        return view('web.index',compact('slide','apropos','poleRecherches','countSection','projets','typeEvenement','evenements','articles'));
    }

    public function apropos()
    {
        $apropos = Apropos::all()->first();
        $countSection = [
            "membre" => User::latest()->get()->count(),
            // "membre" => 76,
            "equipe" => Equipe::where("status",true)->get()->count(),
            "projet" => Projet::where("status",true)->count(),
            "article" => Article::where("status",true)->count()
        ];
        $poleRecherches =  PoleRecherche::where("status",true)->take(4)->get();
        $equipes = Equipe::where("status",true)->take(4)->get();
        $fonctions = Fonction::all();
        $administrationUser = User::whereHas("fonction")->get();
        $partenaires = Partenaire::where("status",true)->get();

        return view('web.apropos',compact('apropos','countSection','poleRecherches','equipes','fonctions','administrationUser','partenaires'));
    }

    public function evernement()
    {
        $typeEvenement = Type::whereHas("evernements")->get();
        $evenements = Evernement::where("status",true)->latest()->get();
        return view('web.evernements.evernement-list',compact('typeEvenement','evenements'));
    }

    public function poleRecherche()
    {
        $poleRecherches =  PoleRecherche::where("status",true)->get();
        $equipes = Equipe::where("status",true)->latest()->get();
        return view('web.pole-recherche.pole-recherche-list',compact('poleRecherches','equipes'));
    }

    public function equipes()
    {
        $poleRecherches =  PoleRecherche::whereHas("equipes")->where("status",true)->get();
        $equipes = Equipe::where("status",true)->latest()->get();
        return view('web.equipes.equipe-list',compact('poleRecherches','equipes'));
    }

    public function projets()
    {
        $poleRecherches = PoleRecherche::whereHas("projets")->where("status",true)->get();
        $projets = Projet::where("status",true)->get();
        return view('web.projet.projet-list',compact('poleRecherches','projets'));
    }

    public function blogs()
    {
        $revues = Revue::all();
        $articles = Article::where("status",true)->latest()->get();
        return view('web.blogs.blog-list',compact('revues','articles'));
    }

    public function membres()
    {
        //les responsables des poles de recherche
        $listUserRespPole = User::whereHas("poleRecherches")->get();

        // les responsables d'equipes
        $listUserRespEquipe = User::whereHas("equipes")->get();

        //les utilisateur qui font partir des equipe
        $listMenbreEquipeUser = User::whereHas('equipe')->get();

        $autreUser = $this->oderUser();

        return view('web.membres.membre-list',compact('listUserRespPole','listUserRespEquipe','listMenbreEquipeUser','autreUser'));
    }

    public function contact()
    {
        return view('web.contact');
    }


    public function showPoleRecherche(PoleRecherche $poleRecherche)
    {
        return view('web.pole-recherche.pole-recherche-detail',compact('poleRecherche'));
    }

    public function showEquipe(Equipe $equipe)
    {
        return view('web.equipes.equipe-detail',compact('equipe'));
    }

    public function showProjet(Projet $projet)
    {
        $listRoleEquipeProjet = RoleEquipeProjet::latest()->get();
        return view('web.projet.projet-detail',compact('projet','listRoleEquipeProjet'));
    }

    public function showEvernement(Evernement $evernement)
    {
        $roleEvernement = RoleEvernement::all();
        return view('web.evernements.evernement-detail',compact('evernement','roleEvernement'));
    }

    public function showArticle(Article $article)
    {
        return view('web.blogs.blog-detail',compact('article'));
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

        return redirect()->back()->with('message',"votre commentaire à été bien reçu.");
    }

    public function showProfil(User $user)
    {
        $typeEvenement = Type::whereHas("evernements")->get();
        return view('web.membres.membre-detail',compact('user','typeEvenement'));

    }

    public function oderUser()
    {
        // Récupérer les IDs des responsables de pôle et d'équipe
        $listRespPole = PoleRecherche::pluck('user_id')->toArray();
        $listRespEquipe = Equipe::pluck('user_id')->toArray();

        // Récupérer les IDs des utilisateurs qui sont membres d'une équipe
        $listEquipeUser = User::whereHas('equipe')->pluck('id')->toArray();

        // Combiner toutes les IDs dans un seul tableau pour vérifier l'exclusion
        $excludedUserIds = array_merge($listRespPole, $listRespEquipe, $listEquipeUser);

        // Récupérer les utilisateurs qui ne sont dans aucune des listes
        $listMembre = User::whereNotIn('id', $excludedUserIds)->get();

        return $listMembre;
    }

}
