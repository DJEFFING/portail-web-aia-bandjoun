<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.index');
});

Route::prefix('user/')->group(function(){
    Route::get('/profil', function () {
        return view('admin.profil');
    })->name('profil');
});

