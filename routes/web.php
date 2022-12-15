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
    $firstTitle = "Hello World!!";

    return view('home', compact("firstTitle"));
})->name("home");

Route::get('/', function() {
    $data = [
        "firstPage" => "Concessionario",
        "description" => "Macchine Premium",
        "macchine" => [
            "Alfa Romeo",
            "BMW",
            "Cadilac",
            "Kamaz"
        ],
    ];
    return view('home', $data);
})->name("home");


