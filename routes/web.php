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
    return view('welcome');
});

//Pagina Principale
Route::get('/prima-pagina', function () {
    $data = [
        "nome" => "Alfredo",
        "cognome" => "Chanta",
        "lista" =>
        [
            "primo",
            "secondo",
            "terzo"
        ]

    ];
    return view("prima-pagina", $data);
})->name("pagina-principale");

//Link
Route::get('/enlace', function () {
    return view("primo-link");
})->name('link');
