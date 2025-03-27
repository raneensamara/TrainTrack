<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::get('/interests', function () {
    return view('wizard.intrersts');
});Route::get('/first', function () {
    return view('wizard.first');
});

