<?php

Route::get('/', function () {
    return view('welcome');
});

Route::('saludo', function () {
    return "Hola mundo!!!";
});

