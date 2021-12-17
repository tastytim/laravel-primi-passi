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
        "lista" => [
            "Home",
            "Page1",
            "Page2"
        ]
    ];
    return view('home', $data);
})->name("homepage");



Route::get('/page1', function () {
    $data = [
        "lista" => [
            "Home",
            "Page1",
            "Page2"
        ]
    ];
    return view('page1', $data);
})->name("page1");



Route::get('/page2', function () {
    $data = [
        "lista" => [
            "Home",
            "Page1",
            "Page2"
        ]
    ];
    return view('page2', $data);
})->name("page2");
