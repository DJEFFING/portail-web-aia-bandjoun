<?php

use App\Http\Controllers\admin\authantification\LoginController;
use App\Http\Controllers\admin\fonctionController;
use App\Http\Controllers\admin\PoleRechercheController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/loginPage', [LoginController::class, 'loginPage'])->name('login-page');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

// Route::get('/')

Route::get('/', function () {
    if (!Auth()->check()) {
        return redirect(route('login-page'));
    }
    return view('admin.index');
});
Route::name('admin.')->prefix('admin/')->group(function () {
    Route::middleware('auth')->group(function () {

        Route::prefix('user/')->group(function () {
            Route::get('/profil', function () {
                return view('admin.profil');
            })->name('profil');
        });
    });

    Route::controller(PoleRechercheController::class)->name('poleRecherche.')->prefix('poleRecherche')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/showStore', 'showStore')->name('showStore');
        Route::get('/{poleRecherche}-showUpdate', 'showUpdate')->name('showUpdate');
        Route::get('/{poleRecherche}-show', 'show')->name('show');

        Route::post('/', 'store')->name('store');
        Route::post('/{poleRecherche}', 'update')->name('update');
        Route::get('/{poleRecherche}-isVisble', 'isVisble')->name('isVisble');

        Route::delete('/{poleRecherche}', 'delete')->name('delete');
    });

    Route::controller(fonctionController::class)->name("fonction.")->prefix('fonction/')->group(function(){
        Route::get('/','index')->name('index');
        Route::post('/','store')->name('store');
        Route::post('/{fonction}','update')->name('update');
        Route::delete('/{fonction}','delete')->name('delete');
    }); 
});
