<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Notification;
use App\Models\Revue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {

        $listRevue = Revue::latest()->get();
        $listArticle = Article::latest()->get();
        return view('admin.blogs.articles.index',compact('listRevue','listArticle'));
    }

    public function showStore()
    {

        $listRevue = Revue::latest()->get();
        return view('admin.blogs.articles.create',compact('listRevue'));
    }

    public function showUpdate(Article $article)
    {

        $listRevue = Revue::latest()->get();
        return view('admin.blogs.articles.update',compact('article','listRevue'));
    }

    public function show(Article $article)
    {

        return view('admin.blogs.articles.show',compact('article'));
    }

    public function store(Request $request)
    {
        // dd($request);
       $newArticle = Article::create([
            "user_id" =>Auth::user()->id,
            "revue_id" =>$request->revue_id,
            "titre"  =>$request->titre,
            "description_1" => $request->description_1,
            "description_2" => $request->description_2,
            "media_url" => $request->file('media_url')->store('articles','public'),
        ]);

        $this->notificationsUAdmin($newArticle);

        return redirect(route('admin.article.index'))->with('message',"l'article à été crée avec success et est en attente de validation.");
    }

    public function update(Request $request, Article $article)
    {
        // dd($request);
        if($request->hasFile('media_url')){
            $article->update([
                "media_url" => $request->file('media_url')->store('articles','public')
            ]);
        }

        $article->update([
            "revue_id" =>$request->revue_id,
            "titre"  =>$request->titre,
            "description_1" => $request->description_1,
            "description_2" => $request->description_2,
        ]);

        return redirect(route('admin.article.index'))->with('message',"l'article à été modifier avec success.");
    }

    public function isVisible(Article $article)
    {
        $article->update(["status"=>!($article->status)]);
        $message = ($article->status == true) ? "l'article est maintenant public" : "l'article n'est plus public !!";

        $this->isVisibleNotification($article);
        return redirect()->back()->with('message',$message);
    }

    public function delete(Article $article)
    {
        $article->delete();
        return redirect(route('admin.article.index'))->with('message',"l'article à été supprimmer avec success.");
    }


    public function notificationsUAdmin($newArticle)
    {
        $listUser = User::all();
        foreach($listUser as $user)
        {
            if($user->getRole("admin"))
            {
                Notification::create([
                    "user_id" => $user->id,
                    "titre" => "nouveau article",
                    "resp_id" =>$newArticle->id,
                    "description" => "Un nouvel article a été ajouté par ".$newArticle->user->name. " Cliquez ici pour avoir plus de détails."
                ]);
            }
        }
        return 0;
    }

    public function isVisibleNotification($article)
    {
        Notification::create([
            "user_id" => $article->user_id,
            "titre" =>($article->status == true)? "nouveau article" : "article désactivé",
            "resp_id" =>$article->id,
            "description" => ($article->status == true) ? "Votre article a été publié par un administrateur.": "Un administrateur a désactivé la publication de votre article."
        ]);
    }
}
