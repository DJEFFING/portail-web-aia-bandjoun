<?php

use App\Http\Controllers\admin\AproposController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\authantification\LoginController;
use App\Http\Controllers\admin\AxeController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DashboadController;
use App\Http\Controllers\admin\equipeController;
use App\Http\Controllers\admin\EvernementController;
use App\Http\Controllers\admin\fonctionController;
use App\Http\Controllers\admin\PartenaireController;
use App\Http\Controllers\admin\PoleRechercheController;
use App\Http\Controllers\admin\ProjetController;
use App\Http\Controllers\admin\RevueController;
use App\Http\Controllers\admin\RoleEquipeController;
use App\Http\Controllers\admin\RoleEquipeProjetController;
use App\Http\Controllers\admin\RoleEvernementController;
use App\Http\Controllers\admin\SlideController;
use App\Http\Controllers\admin\TypeEvernementController;
use App\Http\Controllers\admin\userController;
use Illuminate\Support\Facades\Route;

Route::get('/loginPage', [LoginController::class, 'loginPage'])->name('login-page');
Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('acceuil/',[DashboadController::class,'index'])->name("acceuil");

// Route::get('/')

Route::get('/', function () {
    if (!Auth()->check()) {
        return redirect(route('login-page'));
    }
    return redirect(route('acceuil'));
})->name('admin.index');


Route::name('admin.')->prefix('admin/')->group(function () {
    Route::middleware('auth')->group(function () {


        Route::middleware(['role:Admin'])->controller(PoleRechercheController::class)->name('poleRecherche.')->prefix('poleRecherche')->group(function () {
            Route::get('/', 'index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::get('/showStore', 'showStore')->name('showStore');
            Route::get('/{poleRecherche}-showUpdate', 'showUpdate')->name('showUpdate');
            Route::get('/{poleRecherche}-show', 'show')->name('show')->withoutMiddleware(['role:Admin']);

            Route::post('/', 'store')->name('store');
            Route::post('/{poleRecherche}', 'update')->name('update');
            Route::get('/{poleRecherche}-isVisble', 'isVisble')->name('isVisble');


            Route::delete('/{poleRecherche}', 'delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(fonctionController::class)->name("fonction.")->prefix('fonction/')->group(function(){
            Route::get('/','index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::post('/','store')->name('store');
            Route::post('/{fonction}','update')->name('update');
            Route::delete('/{fonction}','delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(RoleEquipeController::class)->name('roleEquipe.')->prefix('roleEquipe/')->group(function(){
            Route::get('/','index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::post('/','store')->name('store');
            Route::post('/{roleEquipe}','update')->name('update');
            Route::delete('/{roleEquipe}','delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(equipeController::class)->name('equipe.')->prefix('equipe')->group(function () {
            Route::get('/', 'index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::get('/showStore', 'showStore')->name('showStore');
            Route::get('/{equipe}-showUpdate', 'showUpdate')->name('showUpdate');
            Route::get('/{equipe}-show', 'show')->name('show')->withoutMiddleware(['role:Admin']);

            Route::post('/', 'store')->name('store');
            Route::post('/{equipe}-update', 'update')->name('update');
            Route::post('/{equipe}-addMembre','addMembre')->name('addMembre');

            Route::get('/{equipe}-isVisble', 'isVisble')->name('isVisble');

            Route::delete('/{equipe}', 'delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(AxeController::class)->name('axe.')->prefix('axe')->group(function () {
            Route::get('/', 'index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::get('/showStore', 'showStore')->name('showStore');
            Route::get('/{axe}-showUpdate', 'showUpdate')->name('showUpdate');
            Route::get('/{axe}-show', 'show')->name('show')->withoutMiddleware(['role:Admin']);

            Route::post('/', 'store')->name('store');
            Route::post('/{axe}-update', 'update')->name('update');
            Route::post('/{axe}-addMembre','addMembre')->name('addMembre');

            Route::get('/{axe}-isVisble', 'isVisble')->name('isVisble');

            Route::delete('/{axe}', 'delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(PartenaireController::class)->name("partenaire.")->prefix('partenaire/')->group(function(){
            Route::get('/','index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::get('/{partenaire}-isVisible','isVisible')->name('isVisible');
            Route::post('/','store')->name('store');
            Route::post('/{partenaire}','update')->name('update');
            Route::delete('/{partenaire}','delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(TypeEvernementController::class)->name("typeEvernement.")->prefix('typeEvernement/')->group(function(){
            Route::get('/','index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::post('/','store')->name('store');
            Route::post('/{type}','update')->name('update');
            Route::delete('/{type}','delete')->name('delete');
        });


        Route::middleware(['role:Admin'])->controller(RoleEvernementController::class)->name("roleEvernement.")->prefix('roleEvernement/')->group(function(){
            Route::get('/','index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::post('/','store')->name('store');
            Route::post('/{roleEvernement}','update')->name('update');
            Route::delete('/{roleEvernement}','delete')->name('delete');
        });


        Route::middleware(['role:Admin'])->controller(EvernementController::class)->name('evernement.')->prefix('evernement')->group(function () {
            Route::get('/', 'index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::get('/showStore', 'showStore')->name('showStore');
            Route::get('/{evernement}-showUpdate', 'showUpdate')->name('showUpdate');
            Route::get('/{evernement}-show', 'show')->name('show')->withoutMiddleware(['role:Admin']);

            Route::post('/', 'store')->name('store');
            Route::post('/{evernement}-update', 'update')->name('update');
            Route::post('/{evernement}-addMembre','addMembre')->name('addMembre');
            Route::post('/{evernement}-addPartenaire','addPartenaire')->name('addPartenaire');

            Route::get('/{evernement}-isVisible', 'isVisible')->name('isVisible');

            Route::delete('/{evernement}', 'delete')->name('delete');
        });


        Route::middleware(['role:Admin'])->controller(RoleEquipeProjetController::class)->name("roleEquipeProjet.")->prefix('roleEquipeProjet/')->group(function(){
            Route::get('/','index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::post('/','store')->name('store');
            Route::post('/{roleEquipeProjet}','update')->name('update');
            Route::delete('/{roleEquipeProjet}','delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(ProjetController::class)->name('projet.')->prefix('projet')->group(function () {
            Route::get('/', 'index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::get('/showStore', 'showStore')->name('showStore');
            Route::get('/{projet}-showUpdate', 'showUpdate')->name('showUpdate');
            Route::get('/{projet}-show', 'show')->name('show')->withoutMiddleware(['role:Admin']);

            Route::post('/', 'store')->name('store');
            Route::post('/{projet}-update', 'update')->name('update');
            Route::post('/{projet}-addPartenaire','addPartenaire')->name('addPartenaire');
            Route::post('/{projet}-addEquipe','addEquipe')->name('addEquipe');

            Route::get('/{projet}-isVisible', 'isVisible')->name('isVisible');

            Route::delete('/{projet}', 'delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(RevueController::class)->name('revue.')->prefix('revue/')->group(function(){
            Route::get('/','index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::post('/','store')->name('store');
            Route::post('/{revue}','update')->name('update');
            Route::delete('/{revue}','delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(ArticleController::class)->name('article.')->prefix('article')->group(function () {
            Route::get('/', 'index')->name('index')->withoutMiddleware(['role:Admin']);
            Route::get('/showStore', 'showStore')->name('showStore')->withoutMiddleware(['role:Admin']);
            Route::get('/{article}-showUpdate', 'showUpdate')->name('showUpdate')->withoutMiddleware(['role:Admin']);
            Route::get('/{article}-show', 'show')->name('show')->withoutMiddleware(['role:Admin']);
            Route::get('/{article}-isVisible','isVisible')->name('isVisible');

            Route::post('/', 'store')->name('store')->withoutMiddleware(['role:Admin']);
            Route::post('/{article}-update', 'update')->name('update')->withoutMiddleware(['role:Admin']);

            Route::get('/{article}-isVisible', 'isVisible')->name('isVisible');
            Route::delete('/{article}', 'delete')->name('delete');
        });


        Route::controller(userController::class)->name('user.')->prefix('user/')->group(function(){
            Route::get('/','index')->name('index');
            Route::get('/{user}-show','show')->name('show');
            Route::post('/','store')->name('store');
            Route::post('/{user}-update','update')->name('update');
            Route::post('/{user}-update-droit','updateDroit')->name('update-droit');
            Route::get('/profil','profil')->name('profil');
        });


        Route::middleware(['role:Admin'])->controller(SlideController::class)->name('slide.')->prefix('slide/')->group(function(){
            Route::get('/','index')->name('index');
            Route::post('/','store')->name('store');
            Route::post('/{slide}','update')->name('update');
            Route::delete('/{slide}','delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(AproposController::class)->name('apropos.')->prefix('apropos/')->group(function(){
            Route::get('/','index')->name('index');
            Route::post('/','store')->name('store');
            Route::post('/{apropos}','update')->name('update');
            Route::delete('/{apropos}','delete')->name('delete');
        });

        Route::middleware(['role:Admin'])->controller(ContactController::class)->name('contact.')->prefix('contact/')->group(function(){
            Route::get('/','index')->name('index');
            Route::post('/','store')->name('store');
            Route::post('/{contact}','update')->name('update');
            Route::delete('/{contact}','delete')->name('delete');
        });

    });


});
