<?php

use App\Models\Axe;
use App\Models\Publication;
use App\Models\Contact;
use App\Models\Equipe;
use App\Models\PoleRecherche;
use App\Models\Projet;
// use App\Models\Publication;
use App\Models\Revue;
use App\Models\TypePublication;

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
                $models["nbr"] = Publication::countByMonth($i);
                $resul[] = $models;
            }
        } else {
            for ($i = 1; $i <= $monthNow; $i++) {
                $models["month"] = $month[$i - 1];
                $models["nbr"] = Publication::countByMonth($i);
                $resul[] = $models;
            }
        }
        return $resul;
    }
}

if (!function_exists("getRevueWithMostArticles")) {
    function getRevueWithMostArticles()
    {
        // Compter le nombre total d'publication
        $totalPublication = Publication::count();

        // Récupérer la catégorie avec le plus de publication
        $mostPublicationCategorie = TypePublication::withCount('publications')
        ->orderBy('publications_count', 'desc')
        ->first();

        if ($mostPublicationCategorie && $totalPublication > 0) {
            $percentage = ($mostPublicationCategorie->publications_count / $totalPublication) * 100;
        } else {
            $percentage = 0;
        }

        return [
            'categorie' => $mostPublicationCategorie,
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


if(!function_exists("axes"))
{
    function axes()
    {
        $axes = Axe::where("status",true)->latest()->take(4)->get();
        return $axes;
    }
}

