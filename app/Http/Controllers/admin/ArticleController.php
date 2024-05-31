<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Revue;
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
        Article::create([
            "user_id" =>Auth::user()->id,
            "revue_id" =>$request->revue_id,
            "titre"  =>$request->titre,
            "description_1" => $request->description_1,
            "description_2" => $request->description_2,
            "media_url" => $request->file('media_url')->store('articles','public'),
        ]);
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
        return redirect()->back()->with('message',$message);
    }

    public function delete(Article $article)
    {
        $article->delete();
        return redirect(route('admin.article.index'))->with('message',"l'article à été supprimmer avec success.");
    }
}
