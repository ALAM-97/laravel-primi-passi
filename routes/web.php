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

    $data = [
        "nome" => "Alessandro",
        "cognome" => "Amara",
        "data_di_nascita" => "19-10-1997",
        "luogo_di_nascita" => "Roma",
        "cod_fiscale" => "MRALSN97R19H501U",
        "caratteristiche" => [
            "occhi" => "verdi",
            "altezza" => "1,76",
            "capelli" => "castani chiari"
        ]
    ];

    return view('home-page', $data);
});
