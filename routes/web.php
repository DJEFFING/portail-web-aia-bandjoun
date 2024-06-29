<?php
 
use App\Http\Controllers\web\AcceuilController;
use Illuminate\Support\Facades\Route;

Route::controller(AcceuilController::class)->name("web.")->group(function(){
    Route::get('/','acceuil')->name('acceuil');
    Route::get('/about_us','apropos')->name('apropos');
    Route::get('/evernements','evernement')->name('evernement');
    Route::get('/pole-recherche','poleRecherche')->name('pole-recherche');
    Route::get('/equipe','equipes')->name('equipes');
    Route::get('/projets','projets')->name('projets');
    Route::get('/blogs','blogs')->name('blogs');
    Route::get('/membres','membres')->name('membres');
    Route::get('/contact','contact')->name('contact');


    Route::get('/{user}-show-profil','showProfil')->name('show-profil');
    Route::get('/{poleRecherche}-show-poleRecherche','showPoleRecherche')->name('show-poleRecherche');
    Route::get('/{equipe}-show-equipe','showEquipe')->name('show-equipe');
    Route::get('/{projet}-show-projet','showProjet')->name('show-projet');
    Route::get('/{evernement}-show-evernement','showEvernement')->name('show-evernement');
    Route::get('/{article}-show-article','showArticle')->name('show-article');



    Route::post('/{article}-create-commentaire','createCommentaire')->name('create-commentaire');
});



// Route::get('/', function () {
//     return view('web.index');
// });


// Route::get('/evernements', function () {
//     return view('web.evernement');
// });

Route::get('/Projet', function () {
    return view('web.projet');
});

