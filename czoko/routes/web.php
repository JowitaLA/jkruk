<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/rent', function () {
    return view('main');
});


Route::get('/service', function () {
    return view('main');
});