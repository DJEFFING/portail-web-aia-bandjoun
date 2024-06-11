<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Equipe;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function index()
    {
        $nbrUser = User::all()->count();
        $nbrEquipe = Equipe::all()->count();
        $nbrProjet = Projet::all()->count();
        $nbrArticle = Article::all()->count();
        $nbrArticleByMonth = $this->getCountArticleByMonth();

        $articles = Article::latest()->take(5)->get();


       return view('admin.index', compact('nbrUser','nbrEquipe','nbrProjet','nbrArticle','nbrArticleByMonth','articles'));
    }

    public function getCountArticleByMonth()
    {
        $month = ["JAN", "FEV", "MAR", "AVR", "MAI", "JUN", "JUL", "AUT", "SEP", "OCT", "NOV", "DEC"];
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
