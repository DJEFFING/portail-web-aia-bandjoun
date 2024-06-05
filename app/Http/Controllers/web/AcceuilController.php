<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Article;
use App\Models\Equipe;
use App\Models\Evernement;
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

    }


    public function showPoleRecherche(PoleRecherche $poleRecherche)
    {
        return view('web.pole-recherche.pole-recherche-detail',compact('poleRecherche'));
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
