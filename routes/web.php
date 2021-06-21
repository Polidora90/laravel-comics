<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $datiComics = config('comics');

    $datiView = [
        'comicsList' => $datiComics
    ];

    return view('home', $datiView);
})->name('comics');

Route::get('/product/{index}', function ($index) {
    $datiComics = config('comics');

    $comicCliccato = $datiComics[intval($index)];

    if(!is_numeric($index) || $index < 0 || $index > count($datiComics)) {
        abort(404, "Not found");
    }

    $datiSingoloComic = [
        'comic' => $comicCliccato
    ];

    return view('singleProduct', $datiSingoloComic);
})->name('singolo-comic');


