<?php

use App\Http\Controllers\web\AcceuilController;
use Illuminate\Support\Facades\Route;

Route::controller(AcceuilController::class)->name("web.")->group(function(){
    Route::get('/','acceuil')->name('acceuil');
    Route::get('/about_us','apropos')->name('apropos');
    Route::get('/evernements','evernement')->name('evernement');
    Route::get('/pole-recherche','poleRecherche')->name('pole-recherche');
    Route::get('/equipe','equipes')->name('equipes');
    Route::get('/axe','axes')->name('axes');
    Route::get('/projets','projets')->name('projets');
    Route::get('/blogs','blogs')->name('blogs');
    Route::get('/publications','publications')->name('publications');
    Route::get('/membres','membres')->name('membres');
    Route::get('/contact','contact')->name('contact');


    Route::get('/{user}-show-profil','showProfil')->name('show-profil');
    Route::get('/{poleRecherche}-show-poleRecherche','showPoleRecherche')->name('show-poleRecherche');
    Route::get('/{equipe}-show-equipe','showEquipe')->name('show-equipe');
    Route::get('/{axe}-show-axe','showAxe')->name('show-axe');
    Route::get('/{projet}-show-projet','showProjet')->name('show-projet');
    Route::get('/{publication}-show-publication','showPublication')->name('show-publication');
    Route::get('/{evernement}-show-evernement','showEvernement')->name('show-evernement');
    Route::get('/{article}-show-article','showArticle')->name('show-article');
    Route::get('/findByYear-{anneePublication}','findByAnnee')->name('findByAnnee');
    Route::get('/findByCategory-{typePublication}','findByCategoryPublication')->name('findByCategoryPublication');

    //pour la recherche des publications
    Route::post('/findByCriteriad','findByCreteriad')->name('findByCreteriad');



    Route::post('/{article}-create-commentaire','createCommentaire')->name('create-commentaire');
    Route::post('/{publication}-create-commentaire-publication','createCommentairePublication')->name('create-commentaire-publication');

    //pour telecharger une plublication
    Route::get("/{document}-donwload-file","file_download")->name('file_download');
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

