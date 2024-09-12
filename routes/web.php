<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BukuController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "anti",
        "email" => "najminakinantiputri@mail.ugm.ac.id"
        ]);
});

Route::get('/bbblade', function () {
    return view('bbblade');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about2', function () {
    return view('about2');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/article', [ArticleController::class, 'index']);

Route::get('/buku', [BukuController::class, 'index']);
