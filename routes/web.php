<?php

use App\Http\Controllers\web\AcceuilController;
use Illuminate\Support\Facades\Route;

Route::controller(AcceuilController::class)->name("web.")->group(function(){
    Route::get('/','acceuil')->name('acceuil');
    Route::get('/{poleRecherche}-show-poleRecherche','showPoleRecherche')->name('show-poleRecherche');
    Route::get('/{projet}-show-projet','showProjet')->name('show-projet');
    Route::get('/{evernement}-show-evernement','showEvernement')->name('show-evernement');
    Route::get('/{article}-show-article','showArticle')->name('show-article');
});



// Route::get('/', function () {
//     return view('web.index');
// });

Route::get('/about_us', function () {
    return view('web.apropos');
});

Route::get('/evernements', function () {
    return view('web.evernement');
});

Route::get('/Projet', function () {
    return view('web.projet');
});

