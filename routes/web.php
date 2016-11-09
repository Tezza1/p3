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

// A route for each page
Route::get("main", "MainController@index")->name('main.index');

Route::get("lorems", "LoremController@index")->name('lorems.index');

Route::post("lorems", "LoremController@store")->name('lorems.store');

Route::get("users","UserController@index")->name('users.index');

Route::post("users", "UserController@store")->name('users.store');

Route::get("password", "PasswordController@index")->name('passwords.index');

Route::post("password", "PasswordController@store")->name('passwords.store');


