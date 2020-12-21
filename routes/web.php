<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//Route
// Controller -> logika-logika dari aplikasi
//View
//Model -> Jembatan antara logika dengan view

Route::get('/', function () {
    return view('welcome');
});

// Resource controller otomatis crud dengan syarat pada *
Route::resource('article', 'ArticleController');

// * CRUD ->
// Route::get('/article', 'ArticleController@index');
// Route::get('/article/{slug}', 'ArticleController@show');
// Route::get('/article/create', 'ArticleController@create');
// Route::post('/article', 'ArticleController@store');
// Route::get('/article/{id}/edit', 'ArticleController@edit');
// Route::put('/article/{id}', 'ArticleController@update');
// Route::delete('/article/{id}', 'ArticleController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
