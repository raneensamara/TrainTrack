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
Route::get('/traintrack/choose-topics', function () {
    return view('wizard.choose-topics');

});
Route::get('/nontech', function () {
    return view('wizard.nontech');
});
Route::get('/advanced', function () {
    return view('wizard.advanced');
});
