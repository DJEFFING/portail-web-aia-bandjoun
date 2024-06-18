<?php

use App\Models\Article;
use App\Models\Contact;
use App\Models\Equipe;
use App\Models\PoleRecherche;
use App\Models\Projet;
use App\Models\Revue;

if (!function_exists('getCountArticleByMonth')) {
    function   getCountArticleByMonth()
    {
        $month = ["Jan", "Fev", "Mar", "Avr", "Mai", "Jun", "Jul", "Aut", "Sep", "Oct", "Nov", "Dec"];
        $monthNow = now()->month;

        $models = [];
        $resul =  [];

        if (($monthNow) > 7) {
            for ($i = (($monthNow + 1) - 7); $i <= $monthNow; $i++) {
                $models["month"] = $month[$i - 1];
                $models["nbr"] = Article::countByMonth($i);
                $resul[] = $models;
            }
        } else {
            for ($i = 1; $i <= $monthNow; $i++) {
                $models["month"] = $month[$i - 1];
                $models["nbr"] = Article::countByMonth($i);
                $resul[] = $models;
            }
        }
        return $resul;
    }
}

if (!function_exists("getRevueWithMostArticles")) {
    function getRevueWithMostArticles()
    {
        // Compter le nombre total d'articles
        $totalArticles = Article::count();

        // Récupérer la revue avec le plus d'articles
        $mostArticlesRevue = Revue::withCount('articles')
        ->orderBy('articles_count', 'desc')
        ->first();

        if ($mostArticlesRevue && $totalArticles > 0) {
            $percentage = ($mostArticlesRevue->articles_count / $totalArticles) * 100;
        } else {
            $percentage = 0;
        }

        return [
            'revue' => $mostArticlesRevue,
            'percentage' => $percentage
        ];
    }
}

if(!(function_exists("contactAll"))){
    function  contactAll(){
        return Contact::all()->first();
    }
}

if(!function_exists("poleRecherches")){
    function poleRecherches()
    {
        $poleRecherche = PoleRecherche::where("status",true)->get();
        return $poleRecherche;
    }
}


if(!function_exists("equipes")){
    function equipes()
    {
        $equipe = Equipe::where("status",true)->get();
        return $equipe;
    }
}

if(!function_exists("projets"))
{
    function projets()
    {
        $projets = Projet::where("status",true)->latest()->take(3)->get();
        return $projets;
    }
}
