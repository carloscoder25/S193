<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Portada');
});

Route::get('/Repaso', function () {
    return view('Repaso');
});
