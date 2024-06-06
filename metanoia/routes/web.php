<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.menu.index');
});

Route::get('/mdf/protocols', function () {
    return view('pages.mdf.protocols.index');
});
