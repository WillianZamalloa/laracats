<?php


Route::redirect('/', 'home');
Route::redirect('logout', '/');

Route::get('/home', function () {
    return view('layouts.admin');
})->name('home')->middleware('auth'); //*/

//Autenticacion
Auth::routes();
//Gatos
Route::resource('cat', 'CatController');
//Razas
Route::get('breeds', function () {
    return view('breeds.index');
})->name('breeds');

Route::resource('breed', 'BreedController')->except(['show', 'create', 'edit']);

//Route::get('/home', 'HomeController@index')->name('home');
