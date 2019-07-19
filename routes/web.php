<?php


Route::redirect('/', 'home');
Route::redirect('logout', '/');

Route::get('/home', function () {
    return view('layouts.admin');
})->name('home')->middleware('auth'); //*/


Auth::routes();

Route::resource('cat', 'CatController');

//Route::get('/home', 'HomeController@index')->name('home');
