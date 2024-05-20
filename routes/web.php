<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});

Route::get('/about_us', function () {
    return view('web.apropos');
});

Route::get('/evernements', function () {
    return view('web.evernement');
});

Route::get('/Projet', function () {
    return view('web.projet');
});

