<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.menu.index');
});

Route::get('/journal', [JournalController::class, 'index']);
Route::post('/journal', [JournalController::class, 'store']);

Route::get('/well-being/bar', function () {
    return view('pages.well-being.bar');
});

Route::get('/mdf/protocols', function () {
    return view('pages.mdf.protocols.index');
});

Route::get('/mdf/protocols/{id}', function ($id) {
    return view('pages.mdf.protocols.show', [
        'id' => $id
    ]);
});
