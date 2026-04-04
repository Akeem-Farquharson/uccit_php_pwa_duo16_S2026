<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directory', function () {
    return view('directory');
});

Route::get('/socials', function () {
    return view('socials');
});

Route::get('/courses', function () {
    $courses = Course::all();
    return view('courses', compact('courses'));
});

Route::get('/admissions', function () {
    return view('admissions');
});

