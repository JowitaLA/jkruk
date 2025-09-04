<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/serwis', function () {
    return view('service');
});

Route::get('/wypozyczalnia', function () {
    return view('rental');
});
