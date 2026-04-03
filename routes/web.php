<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directory', function () {
    return view('directory');
});

Route::get('/socials', function () {
    return view('socials');
});

