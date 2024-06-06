<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Article;
use App\Models\Equipe;
use App\Models\Evernement;
use App\Models\Fonction;
use App\Models\Partenaire;
use App\Models\PoleRecherche;
use App\Models\Projet;
use App\Models\Slide;
use App\Models\Type;
use App\Models\User;
use App\Models\RoleEquipeProjet;
use App\Models\RoleEvernement;
use Illuminate\Http\Request;

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


}
