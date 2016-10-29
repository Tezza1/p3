<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// A route for each page. Only need index for this assignment
Route::get("/main", "MainController@index")->name('main.index');

Route::get("/lorems", "LoremController@index")->name('lorems.index');

Route::get("/users","UserController@index")->name('users.index');